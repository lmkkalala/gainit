 <script src="<?=base_url()?>assets_client/js/jquery.min.js"></script>
  <!-- plugins:js -->
  <script src="<?=base_url()?>assets_client/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?=base_url()?>assets_client/vendors/chart.js/Chart.min.js"></script>
  <script src="<?=base_url()?>assets_client/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>assets_client/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?=base_url()?>assets_client/js/off-canvas.js"></script>
  <script src="<?=base_url()?>assets_client/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>assets_client/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?=base_url()?>assets_client/js/dashboard.js"></script>
  <script src="<?=base_url()?>assets_client/js/data-table.js"></script>
  <!-- End custom js for this page-->
<script type="text/javascript">
  // validate product sold
  $(document).ready(function(){
    $('#valideVente').on('show.bs.modal', function (e) {
        product_sold_id = $(e.relatedTarget).data('id');
        $('#product_sold_id').val(product_sold_id);
      });
  });

$(document).on('submit','form#testimony_and_validation_form',function (event) {
       event.preventDefault();
       var data = {};
       data.identifier = $('#identifier').val();
       data.testimony_message = $('#testimony_message').val();
       data.product_sold_id = $('#product_sold_id').val();
       $.ajax({
        url:'<?=base_url('Welcome/add_to_testimony')?>',
        type:'POST',
        data:data,
        dataType:'json',
        beforeSend: function(){
            $('#submit_testimony').prop('disabled',true);
        },
        success: function(response){
            $('#submit_testimony').prop('disabled',false);
            var icon = '';
            if (response.status == 'warning') {
                icon = 'warning';
            }else if (response.status == 'error') {
                icon = 'error';
            }else if (response.status == 'success') {
                $('#testimony_message').val('');
                $('#valideVente').modal('hide');
                icon = 'success';
            }

          swal({
            text: response.info,
            icon: icon,
            button: false,
          });
        }
    });
       event.stopImmediatePropagation();
       return;
   });


  $(document).ready(function() {
        setTimeout(function(){
            $('#preloader-seller').hide();
            $('#body_content').show();
        },1000);
    });
  $(document).ready(function() {
      $('#mytable').DataTable();
  });

  // create a client account for a seller
  $('#create_account').on('click', function(){
      var create_id_user = $('#create_id_user').text();
      $.ajax({
        url:'<?=base_url('Welcome/create_a_client_account')?>',
        type:'POST',
        data:{create_id_user:create_id_user},
        dataType:'json',
        success: function(result){
          var icon = '';
          if (result.status == 'success') {
            icon = "success";
          }else if (result.status == 'fail') {
            icon = "warning";
          }else{
             icon = "info";
          }
          swal({
            text: result.info,
            icon: icon,
            button: false,
          });
        }
      });
  });

  // delete the client account of a seller 
  $('#delete_account').on('click', function(){
      var create_id_user = $('#create_id_user').text();
       $.ajax({
        url:'<?=base_url('Welcome/delete_a_client_account')?>',
        type:'POST',
        data:{create_id_user:create_id_user},
        dataType:'json',
        success: function(result){
          var icon = '';
          if (result.status == 'success') {
            icon = "success";
          }else if (result.status == 'fail') {
            icon = "warning";
          }else{
             icon = "info";
          }
          swal({
            text: result.info,
            icon: icon,
            button: false,
          });
        }
      });
  });  

  
  $(document).ready(function(){
    // add a product category
    $(document).on('submit','form#FormCategory',function(event){
      event.preventDefault();
      $('#categorie_loader').show();
      var categorie = $('#category').val();
      $.post('<?=base_url('Vendeur/add_category')?>',{'categorie':categorie},function(result){
        $('#categorie_loader').hide();
        $('#category').val('');
        swal({
          text: result.info,
          icon: "warning",
          button: false,
        });
      },'json');
    });

    // send message to admin
    $(document).on('submit','form#Contact_admin',function(event){
      event.preventDefault();
      $('#submit_button').prop('disabled',true);
      $('#send_message').attr('class','spinner-grow spinner-grow-sm text-light fs-5');
      $.post('<?=base_url('Vendeur/contact_admin')?>',$('#Contact_admin').serialize(),function(result){
        $('#submit_button').prop('disabled',false);
        $('#send_message').attr('class','mdi mdi-send');
        if (result.status == 'success') {
          var icon = 'success';
          $('#Contact_admin')[0].reset();
        }else{
          var icon = 'fail';
        }
        swal({
          text: result.info,
          icon: icon,
          button: false,
        });
      },'json');
    });
  });


// Adding a new product
  $(document).ready(function(){
    $(document).on('submit','form#FormProduct',function (event) {
      event.preventDefault();
      formdata = new FormData(this);
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formdata,
        dataType:'json',
        processData: false,
        contentType: false,
        success: function(result){
          if (result.status == 'success') {
            $("#FormProduct")[0].reset();
            $("#modal").modal('hide');
            swal({
              text: result.info,
              icon: "success",
              button: false,
            });
            setTimeout(function() {
                location.reload(true);
            },3000);
          }else{
            swal({
              text: result.info,
              icon: "error",
              button: false,
            });
          } 
        }
      });
      event.stopImmediatePropagation();
      return;
    })
  });

// Get data to prefill the update form for the product
  $(document).ready(function(){
    $('#Updatemodal').on('show.bs.modal', function (e) {
      var data = {};
        data.rowid = $(e.relatedTarget).data('id');
        if (data.rowid == 'undefined') {
          console.log('add produit');
        }else{  
          $.ajax({
            type:'POST',
            url: '<?=base_url('Vendeur/get_data')?>',
            data: data,
            dataType:'json',
            success: function (result) {
              console.log(result);
              $('#updatecategorie').val(result[0].category_product);
              $('#updatedescription').val(result[0].description);
              $('#updateprixT').val(result[0].mise);
              $('#updateprix').val(result[0].prix_vente);
              $('#updateproduit').val(result[0].product);
              $('#old_image').val(result[0].caption_image);
              $('#product_id').val(result[0].id);
              $('#show_product').prop('src','<?=base_url('dist/produit/')?>'+result[0].caption_image);
            }
          });
        }
    });
});

// Update product here
  $(document).ready(function(){
    $(document).on('submit','form#FormProductUpdate',function (event) {
      event.preventDefault();
      formdata = new FormData(this);
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formdata,
        dataType:'json',
        processData: false,
        contentType: false,
        success: function(result){
          if (result.status == 'success') {
            $("#FormProductUpdate")[0].reset();
            $("#FormProductUpdate").modal('hide');
            //alert(result.info);
            swal({
              text: result.info,
              icon: "success",
              button: false,
            });
            setTimeout(function() {
                location.reload(true);
            },3000);
          }else{
            //alert(result.info);
            swal({
              text: result.info,
              icon: "error",
              button: false,
            });
          } 
        }
      });
      event.stopImmediatePropagation();
      return;
    })
  });

  // Delete product call modal
  $(document).ready(function(){
    $('#Deletemodal').on('show.bs.modal', function (e) {
      var data = {};
        rowid = $(e.relatedTarget).data('id');
        console.log(rowid);
        $('#product_id').val(rowid);
      });
  });
  // Delete product call fuction
  $('#validateSellProduct').click(function () {
      var data = {};
      data.product_id = $('#product_id').val();
      //console.log(data.rowid);
      $.ajax({
        url: '<?=base_url('Vendeur/valider_seller_product')?>',
        type: 'POST',
        data: data,
        dataType:'json',
        success: function(result){
          if (result.status == 'success') {
            $('#Deletemodal').modal('hide');
          //alert(result.info);
          swal({
            text: result.info,
            icon: "success",
            button: false,
          });
             setTimeout(function() {
                location.reload(true);
            },3000);
          }else{
            //alert(result.info);
            swal({
              text: result.info,
              icon: "error",
              button: false,
            });
          } 
      }
    });
  });

  // Activer session product call modal
  $(document).ready(function(){
    $('#Session_display').on('show.bs.modal', function (e) {
      var data = {};
        rowid_activate = $(e.relatedTarget).data('id');
        console.log(rowid_activate);
        $('#product_id_show').val(rowid_activate);
      });
  });

  // Activer session product call fuction
  $('#ActivateProduct').click(function () {
      var data = {};
      data.product_id_show = $('#product_id_show').val();
      data.start_date = $('#start_date').val();
      data.end_date = $('#end_date').val();
      console.log(data.rowid_activate);
      $.ajax({
        url: '<?=base_url('Vendeur/activate_product')?>',
        type: 'POST',
        data: data,
        dataType:'json',
        success: function(result){
          if (result.status == 'success') {
            $('#Session_display').modal('hide');
            //alert(result.info);
            swal({
              text: result.info,
              icon: "success",
              button: false,
            });
             setTimeout(function() {
                location.reload(true);
            },3000);
          }else{
            //alert(result.info);
            swal({
              text: result.info,
              icon: "error",
              button: false,
            });
          } 
      }
    });
  });
</script>