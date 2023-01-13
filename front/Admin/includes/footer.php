<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="<?=base_url('dist/iziToast/css/iziToast.min.css')?>">
<script src="<?=base_url('dist/iziToast/js/iziToast.min.js')?>"></script>
<script type="text/javascript">

    function filter_liste(){
        var seller = $('#seller').val();
            $('#seller_list').hide();
            $.ajax({
                url:'<?=base_url('Welcome/filter_seller_list/')?>'+seller,
                type:'POST',
                success: function(result){
                    $('#seller_list').html('');
                    $('#seller_list').show();
                    $('#seller_list').html(result);
                }
            });
    }

    $(document).ready(function() {
        $('#example').DataTable();
        setTimeout(function(){
            $('#preloader-admin').hide();
            $('#wrapper').show();
        },2500);
    });


        $(document).ready(function(){
            $('#valider').on('show.bs.modal',function (e) {
               rowid = $(e.relatedTarget).data('id');
               $('#current_product_id').val(rowid);
            });

            $('#ValiderProduct').on('click',function(){
                var data = {};
                data.mise = $('#mise').val();
                data.participant = $('#participant').val();
                data.product_id = $('#current_product_id').val();
                if (data.mise != '' && data.participant != '') {
                    $.ajax({
                        url:'<?=base_url('Admin/update_product')?>',
                        type:'POST',
                        data: data,
                        dataType:'json',
                        beforeSend: function(){
                            $('#ValiderProduct').prop('disabled',true);
                        },
                        success: function (response) {
                            $('#ValiderProduct').prop('disabled',false);
                            if (response.status == 'success') {
                                swal(response.info);
                                $('#participant').val('');
                                $('#current_product_id').val('');
                                $('#valider').modal('hide'); 
                            }else{
                                swal(response.info);
                            }
                            
                        }
                    });
                }else{
                   swal('no data');
                }
            });

            $(document).on('submit','form#AddAdminForm',function(evt){
                evt.preventDefault();
                var password = $('#password').val();
                var conf_password = $('#conf_password').val();
                if (conf_password != password) {
                    swal('Mot de pass ne correspondent pas');
                    return;
                }
                var formdata = new FormData(this);
                    $.ajax({
                        url:'<?=base_url('Admin/add_admin')?>',
                        type:'POST',
                        data: formdata,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        beforeSend: function(){
                            $('#add_button').prop('disabled',true);
                        },
                        success: function (response) {
                            $('#add_button').prop('disabled',false);
                            if (response.status == 'success') {
                                swal(response.info);
                                $('#AddAdminForm')[0].reset();
                            }else{
                                swal(response.info);
                            }
                        }
                    });
                evt.stopImmediatePropagation();
                return false;
            });

            $('#update_admin').on('show.bs.modal',function (e) {
               user_id = $(e.relatedTarget).data('id');
               $('#Uppassword').val('');
               $.ajax({
                url:'<?=base_url('Admin/get_admin_user')?>',
                type:'POST',
                data:{user_id:user_id},
                dataType:'json',
                success: function(response){
                   $('#profile_view').attr('src','<?=base_url('assets/img/user/')?>'+response.user[0].profile);
                   $('#path_profile').val(response.user[0].profile);
                   $('#user_id').val(response.user[0].id);
                   $('#Upname').val(response.user[0].username);
                   $('#Upemail').val(response.user[0].email);
                   $('#Upphone').val(response.user[0].phone);
                   $('#Upcountry').val(response.user[0].country);
                   $('#Upprovince').val(response.user[0].province);
                   $('#Upcity').val(response.user[0].city);
                }
               });
            });

            $(document).on('submit','form#UpdateAdminForm',function(evt){
                evt.preventDefault();
                var formdata = new FormData(this);
                    $.ajax({
                        url:'<?=base_url('Admin/update_admin')?>',
                        type:'POST',
                        data: formdata,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        beforeSend: function(){
                            $('#change_validate').css('display','none');
                            $('#loader').css('display','');
                        },
                        success: function (response) {
                            $('#change_validate').css('display','');
                            $('#loader').css('display','none');
                            if (response.status == 'success') {
                                swal(response.info);
                                $('#UpdateAdminForm')[0].reset();
                                $('#update_admin').modal('hide');
                                var type_user = $('#type_user').val();
                                if (type_user == 'client') {
                                    setTimeout(function(){
                                        window.location.href = '<?=base_url('Welcome/index/client')?>';
                                    },2000);
                                }else{
                                    setTimeout(function(){
                                        window.location.href = '<?=base_url('Welcome/index/UsAdmin')?>';
                                    },2000);
                                }
                                
                            }else{
                                swal(response.info);
                            }
                        }
                    });
                evt.stopImmediatePropagation();
                return false;
            });
    });

            function block_admin(value_id){
                var user_id = value_id;
                swal("Voulez vous vraiment effectuer cette operation sur cet admin?")
                .then((value) => {
                    if (value === true) {
                        $.ajax({
                            url:'<?=base_url('Admin/block_admin')?>',
                            type:'POST',
                            data: {user_id:user_id},
                            dataType:'json',
                            success: function (response) {
                                if (response.status == 'success') {
                                    if (response.action == 'bloquer') {
                                       $('#icon'+user_id+'').attr('class','fas fa-lock'); 
                                   }else{
                                       $('#icon'+user_id+'').attr('class','fas fa-lock-open');
                                   }
                                    swal(`${response.info}`);
                                }else{
                                    swal(`${response.info}`);
                                }
                            }
                        });
                    }
                });
            }
            // validate a testimony of a client
            function valider(value_id){
                var testimony_id = value_id;
                swal("Voulez vous vraiment effectuer cette operation?")
                .then((value) => {
                    if (value === true) {
                        $.ajax({
                            url:'<?=base_url('Admin/validate_testimony')?>',
                            type:'POST',
                            data: {testimony_id:testimony_id},
                            dataType:'json',
                            success: function (response) {
                                if (response.status == 'success') {
                                    if (response.view == 'disvalidate') {
                                       $('#icon'+testimony_id+'').attr('class','fas fa-lock'); 
                                   }else{
                                       $('#icon'+testimony_id+'').attr('class','fas fa-lock-open');
                                   }
                                    swal(`${response.info}`);
                                }else{
                                    swal(`${response.info}`);
                                }
                            }
                        });
                    }
                });
            }

            function delete_admin(value_id){
                var user_id = value_id;
                swal("Voulez vous vraiment supprimer cet admin?")
                .then((value) => {
                    if (value === true) {
                        $.ajax({
                            url:'<?=base_url('Admin/delete_admin')?>',
                                    type:'POST',
                                    data: {user_id:user_id},
                                    dataType:'json',
                                    success: function (response) {
                                        if (response.status == 'success') {
                                            swal(`${response.info}`);
                                            setTimeout(function(){
                                                window.location.href = '<?=base_url('Welcome/index/UsAdmin')?>';
                                            },3000);
                                        }else{
                                            swal(`${response.info}`);
                                        }
                                    }
                        });
                    }
                });
            }

            function block_seller(value_id){
                swal("Voulez vous vraiment effectuer cette operation sur cet vendeur (Boutique)?")
                .then((value) => {
                    if (value === true) {
                        var user_id = value_id;
                        $.ajax({
                            url:'<?=base_url('Admin/block_seller')?>',
                                    type:'POST',
                                    data: {user_id:user_id},
                                    dataType:'json',
                                    success: function (response) {
                                        if (response.status == 'success') {
                                                if (response.action == 'bloquer') {
                                                   $('#icon'+user_id+'').attr('class','fas fa-lock'); 
                                               }else{
                                                   $('#icon'+user_id+'').attr('class','fas fa-lock-open');
                                               }
                                            swal(`${response.info}`);
                                        }else{
                                            swal(`${response.info}`);
                                        }
                                    }
                        });
                    }
                });
            }

            function block_client(value_id){
                swal("Voulez vous vraiment effectuer cette operation sur cet Client?")
                .then((value) => {
                    if (value === true) {
                        var user_id = value_id;
                        $.ajax({
                            url:'<?=base_url('Admin/block_client')?>',
                                    type:'POST',
                                    data: {user_id:user_id},
                                    dataType:'json',
                                    success: function (response) {
                                        if (response.status == 'success') {
                                                if (response.action == 'bloquer') {
                                                   $('#icon'+user_id+'').attr('class','fas fa-lock'); 
                                               }else{
                                                   $('#icon'+user_id+'').attr('class','fas fa-lock-open');
                                               }
                                            swal(`${response.info}`);
                                        }else{
                                            swal(`${response.info}`);
                                        }
                                    }
                        });
                    }
                });
            }

            $('#update_client').on('show.bs.modal',function (e) {
               user_id = $(e.relatedTarget).data('id');
               $('#Uppassword').val('');
               $.ajax({
                url:'<?=base_url('Admin/get_admin_user')?>',
                type:'POST',
                data:{user_id:user_id},
                dataType:'json',
                success: function(response){
                   $('#profile_view').attr('src','<?=base_url('assets/img/user/')?>'+response.user[0].profile);
                   $('#path_profile').val(response.user[0].profile);
                   $('#user_id').val(response.user[0].id);
                   $('#Upname').val(response.user[0].username);
                   $('#Upemail').val(response.user[0].email);
                   $('#Upphone').val(response.user[0].phone);
                   $('#Upcountry').val(response.user[0].country);
                   $('#Upprovince').val(response.user[0].province);
                   $('#Upcity').val(response.user[0].city);
                }
               });
            });

            function delete_client(value_id){
                swal("Voulez vous vraiment supprimer cet Client?")
                .then((value) => {
                    if (value === true) {
                        var user_id = value_id;
                        $.ajax({
                            url:'<?=base_url('Admin/delete_client')?>',
                                    type:'POST',
                                    data: {user_id:user_id},
                                    dataType:'json',
                                    success: function (response) {
                                        if (response.status == 'success') {
                                            setTimeout(function(){
                                                window.location.href = '<?=base_url('Welcome/index/UsAdmin')?>';
                                            },3000);
                                            swal(`${response.info}`);
                                        }else{
                                            swal(`${response.info}`);
                                        }
                                    }
                        });
                    }
                });
            }
            
            function delete_product(value_id){
                swal("Voulez vous vraiment supprimer cet Produit?")
                .then((value) => {
                    if (value === true) {
                        var product_id = value_id;
                        $.ajax({
                            url:'<?=base_url('Admin/delete_product')?>',
                                    type:'POST',
                                    data: {product_id:product_id},
                                    dataType:'json',
                                    success: function (response) {
                                        if (response.status == 'success') {
                                            setTimeout(function(){
                                                window.location.href = '<?=base_url('Welcome/index/Produit')?>';
                                            },3000);
                                            swal(`${response.info}`);
                                        }else{
                                            swal(`${response.info}`);
                                        }
                                    }
                        });
                    }
                });
            }
</script>