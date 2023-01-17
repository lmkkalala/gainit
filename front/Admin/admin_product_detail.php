<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gain IT - Admin</title>
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/simple-line-icons.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/img/favicon.ico')?>">
</head>

<body id="page-top">
    <?php include('includes/loader_admin.php');?>
    <div id="wrapper" style="display:none;height: 700px;overflow: auto;">
         <?php
            include('includes/admin_nav.php');
         ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text" placeholder="Recherchez " disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-primary py-0" type="button" disabled><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?=base_url()?>assets_admin/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?=base_url()?>assets_admin/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?=base_url()?>assets_admin/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?=base_url()?>assets_admin/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown show no-arrow">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="<?=base_url('Welcome/index/profile')?>">
                                        <span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin en ligne</span>
                                        <img class="border rounded-circle img-profile" src="<?=base_url('assets/img/user/'.$user[0]['profile'])?>">
                                    </a>
                                    <div class="dropdown-menu show shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="<?=base_url('Welcome')?>"><i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Retour Au Site</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="presentation" href="<?=base_url('Welcome/index/profile')?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="presentation" href="<?=base_url('Logout')?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;se déconnecter</a>
                                    </div>
                                </div>
                            </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card shadow mt-2">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Article</p>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <?php
                                                if ($detail_product[0]['sellValidate'] == '1') {
                                                    $button_color = 'btn-danger';
                                                    $disable = 'disabled';
                                                }else{
                                                    $button_color = 'btn-info';
                                                    $disable = '';
                                                }

                                                if ($detail_product[0]['validate_tirage'] == '1') {
                                                    $button_color_tirage = 'btn-danger';
                                                    $disable_tirage = 'disabled';
                                                    $text = 'Tirage déjà faite';
                                                }else{
                                                    $button_color_tirage = 'btn-success';
                                                    $disable_tirage = '';
                                                    $text = 'Faire Le Tirage';
                                                }
                                            ?>
                                            <img src="<?=base_url('dist/produit/'.$detail_product[0]['caption_image'])?>" class="img-fluid">
                                        </div>
                                        <div class="col-md-7">
                                            <span id="id_product" style="display:none;"><?=$detail_product[0]['id']?></span>
                                            <span><span class="font-weight-bold">Article </span><?=$detail_product[0]['product']?></span><br>
                                            <span><span class="font-weight-bold">Categorie </span><?=$detail_product[0]['category_product']?></span><br>
                                            <span><span class="font-weight-bold">No Participant </span><?=$detail_product[0]['participant']?></span><br>
                                            <span><span class="font-weight-bold">Mise </span><?=$detail_product[0]['mise']?></span><br>
                                            <span><span class="font-weight-bold">Prix Total </span><?=$detail_product[0]['prix_vente']?></span><br>
                                            <span><span class="font-weight-bold">Debut </span><?=$detail_product[0]['start_date']?></span><br>
                                            <span><span class="font-weight-bold">Fin </span><?=$detail_product[0]['end_date']?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-1">
                                            <button class="btn <?=$button_color?> w-100 mt-2 shadow-none" id="cloture_tirage" onclick="cloture_tirage()" <?=$disable?>>
                                                <img src="<?=base_url('assets/img/loading.gif')?>" style="display: none;" height="20" width="20" id="loader_tirage">Cloturer Mise
                                            </button>
                                        </div>
                                        <div class="col-md-6 mt-1">
                                            <button class="btn <?=$button_color_tirage?> w-100 mt-2 shadow-none" id="make_tirage" onclick="function_make_tirage()" <?=$disable_tirage?>>
                                                <img src="<?=base_url('assets/img/loading.gif')?>" style="display: none;" height="20" width="20" id="loader_tirage_process"><?=$text?>
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card shadow mt-2">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Chart <span id="number_client">0</span>/<?=$detail_product[0]['participant']?> 
                                    <button class="btn btn-info shadow-none text-white" onclick="number_client_function()">
                                        <img src="<?=base_url('assets/img/loading.gif')?>" style="display: none;" height="20" width="20" id="loader">Refresh chart
                                    </button>
                                </p>
                            </div>
    <style type="text/css">
        .chart {
          border: 1px solid royalblue;
        }
    </style>
                            <div class="card-body">
                                <div>
                                    <div class="chart">
                                        <canvas id="myChart" width="400" height="200"></canvas>
                                    </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mt-2">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Mise des Clients</p>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Jusqu'à&nbsp;&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"></div>
                                </div>
                            </div> -->
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="example">
                                    <thead>
                                        <tr class="text-center" style="font-size: 14px;">
                                            <!-- <th>No</th> -->
                                            <th>Profile</th>
                                            <th width="150">Noms</th>
                                            <th>Contacts</th>
                                            <th>Image</th>
                                            <th>Produit</th>
                                            <th>Mise</th>
                                            <th>Date</th>
                                            <th style="margin-top: 0px;">Progrès</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $count = 1; foreach ($produit_en_vente as $key => $value): ?>
                                        <tr>
                                            <!-- <td><?=$count?></td> -->
                                            <td>
                                                <img class="rounded-circle mr-2" width="70" height="40" src="<?=base_url('assets/img/user/').$produit_en_vente[$key]['profile']?>" style="background-color: #ffffff;">
                                            </td>
                                            <td width="150">
                                                <?=$produit_en_vente[$key]['username']?>
                                            </td>
                                            <td><?=$produit_en_vente[$key]['email']?><br>
                                                <?=$produit_en_vente[$key]['phone']?>
                                            </td>
                                            <td>
                                                <img class="rounded mr-2" width="70" height="40" src="<?=base_url('dist/produit/').$produit_en_vente[$key]['caption_image']?>" style="background-color: #ffffff;">
                                            </td>
                                            <td><?=$produit_en_vente[$key]['product']?></td>
                                            <td><?=$produit_en_vente[$key]['mise']?></td>
                                        <?php 
                                            $today = date('Y-m-d');
                                            if($today >= $produit_en_vente[$key]['end_date'] and $produit_en_vente[$key]['sellValidate'] == 1){
                                                $progress = 'Terminer';
                                                $icon = 'success';
                                            }else{
                                                $progress = 'En cours';
                                                $icon = 'info';
                                            }
                                        ?>
                                            <td><?=$produit_en_vente[$key]['date']?></td>
                                            <td class="text-center text-<?=$icon?>">
                                                <button class="btn btn-secondary shadow-none h6"><?=$progress?></button>
                                            </td>
                                        </tr>
                                <?php $count ++; endforeach; ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr></tr>
                                    </tfoot> -->
                                </table>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    </div>
                </div>              
            </div>
        </div>


        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Gain IT</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="<?=base_url()?>assets_admin/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets_admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?=base_url()?>assets_admin/js/theme.js"></script>
<?php
    include('includes/footer.php');
?>
<script type="text/javascript">
    // proceder au tirage
    function function_make_tirage(){
         swal("Voulez vous vraiment procceder au tirage de cet article?").then((value) => {
            var id_product = $('#id_product').text();
            if (value === true) {
                $.ajax({
                    url:'<?=base_url('Admin/process_tirage')?>',
                    type:'POST',
                    data: {'id_product':id_product},
                    dataType:'json',
                    beforeSend: function(){
                        $('#loader_tirage_process').show();
                    },
                    success: function (response) {
                        swal(response.info);
                        $('#loader_tirage_process').hide();
                        if (response.status == 'success') {
                            $('#loader_tirage_process').html('Tirage déjà faite');
                            $('#make_tirage').attr('class','btn btn-danger w-100 mt-2 shadow-none');
                        }   
                    }
                });
            }
        });
    }

    // close tirage
    function cloture_tirage() {
        swal("Voulez vous vraiment Cloture le tirage de cet article?").then((value) => {
        if (value === true) {
            var id_product = $('#id_product').text();
                $.ajax({
                    url:'<?=base_url('Admin/close_tirage')?>',
                    type:'POST',
                    data: {'id_product':id_product},
                    dataType:'json',
                    beforeSend: function(){
                        $('#loader_tirage').show();
                    },
                    success: function (response) {
                        swal(response.info);
                        $('#loader_tirage').hide();
                        $('#cloture_tirage').attr('class','btn btn-danger w-100 mt-2 shadow-none');
                    }
                });
            }
        });
    }
//$(document).ready(function() {
    var number_client = 0;
var ctx = document.getElementById('myChart').getContext('2d');
function number_client_function(){
    var id_product = $('#id_product').text();
    $.ajax({
        url:'<?=base_url('Admin/get_product_client_bet_number')?>',
        type:'POST',
        data: {'id_product':id_product},
        dataType:'json',
        beforeSend: function(){
            $('#loader').show();
        },
        success: function (response) {
            $('#loader').hide();
            number_client = response.amount;
            $('#number_client').html(number_client);
            if(number_client == 0){
                value = [0];
            }else if (number_client <= 10) {
                value = [number_client];
            }else if (number_client <= 20) {
                value = [0,number_client];
            }else if (number_client <= 30) {
                value = [0,20,number_client];
            }else if (number_client <= 40) {
                value = [0,20,30,number_client];
            }else if (number_client <= 50) {
                value = [0,20,30,40,number_client];
            }else if (number_client <= 60) {
                value = [0,20,30,40,50,number_client];
            }else if (number_client <= 70) {
                value = [0,20,30,40,50,60,number_client];
            }else if (number_client <= 80) {
                value = [0,20,30,40,50,60,70,number_client];
            }else if (number_client <= 90) {
                value = [0,20,30,40,50,60,70,80,number_client];
            }else if (number_client <= 100) {
                value = [0,20,30,40,50,60,70,80,90,number_client];
            }else{
                value = [0,20,30,40,50,60,70,80,90,100,number_client];
            }   
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line', // also try bar or other graph types
    // The data for our dataset
    data: {
        labels: ["0", "10", "20", "30", "40", "50", "60", "70", "80", "90", "100", "Plus"],
        // Information about the dataset
    datasets: [{
            label: "Participants",
            backgroundColor: 'lightblue',
            borderColor: 'royalblue',
            data: value,
        }]
    },
    // Configuration options
    options: {
    layout: {
      padding: 10,
    },
        legend: {
            position: 'bottom',
        },
        title: {
            display: true,
            text: 'Participants au tirage'
        },
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Nombre Participants Total'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Nombre Participants Enregistré'
                }
            }]
        }
    }
            });   
        }
    });
}
setTimeout(number_client_function(),300);
//});
</script>
</body>

</html>