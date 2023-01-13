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
    <link rel="stylesheet" href="<?=base_url('assets/icofont/icofont.min.css')?>">
</head>
    
<body id="page-top">
        <?php include('includes/loader_admin.php');?>
    <div id="wrapper" style="display:none;height: 700px;overflow: auto;">
        <?php include('includes/admin_nav.php');?>
        <div class="d-flex flex-column" id="content-wrapper" style="overflow-y:auto;">
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
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Télécharger rapport</a></div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>VENTES GLOBALES</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$<?=$total_money_amount?></span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0">
                                            <a href="#" style="font-size: 12px;">Total ventes</a>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="far fa-money-bill-alt fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Vendeur (Boutique)</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?=$seller_number?></span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><a href="<?=base_url('Welcome/index/seller')?>" style="font-size: 12px;">en savoir plus</a></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-store fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>&nbsp;Utilisateurs</span></div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span><?=$all_user_number?></span></div>
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><a href="#" style="font-size: 12px;">en savoir plus</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>&nbsp;Client</span></div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span><?=$client_number?></span></div>
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><a href="<?=base_url('Welcome/index/client')?>" style="font-size: 12px;">en savoir plus</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>produits&nbsp;</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?=$product_number?></span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><a href="<?=base_url('Welcome/index/Produit')?>" style="font-size: 12px;">en savoir plus</a></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-box fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Liste Nouveaux Produits</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="example">
                                <thead>
                                    <tr class="text-center">
                                        <th>Image</th>
                                        <th>Produit</th>
                                        <th>Categorie</th>
                                        <th>Prix</th>
                                        <th>Mise</th>
                                        <th>Echeances</th>
                                        <!-- <th style="margin-top: 0px;">Status</th> -->
                                        <th style="margin-top: 0px;">Participants</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php 
                                $today = date('Y-m-d');
                                foreach ($products_show_admin_dash as $key => $value): 
                                    $tirage_today[$key] = $today == $value->end_date? 'icofont-alarm text-warning h4':'';                                   
                            ?>
                                    <tr>
                                        <td><img class="mr-2" width="70" height="40" src="<?=base_url('dist/produit/').$value->caption_image?>" style="background-image: url(&quot;<?=base_url()?>assets_admin/img/Fanta-Logo.png&quot;);background-repeat: no-repeat;background-size: cover;background-color: #ffffff;"></td>
                                        <td  width="150" style="background-color:rgba(0, 0, 0, 0.7);">
                                            <a href="<?=base_url('Welcome/index/admin_product_detail/'.$value->id)?>" class="btn shadow-none text-white" style="font-size: 12px;"><?=$value->product?><i class="<?=$tirage_today[$key]?>"></i></a>
                                        </td>
                                        <td><?=$value->category_product?></td>
                                        <td><?=$value->prix_vente?></td>
                                        <td><?=$value->mise?></td>
                                    <?php 
                                    $info = '';
                                        if($today >= $value->end_date and $value->sellValidate == 1){
                                            $progress = 'Terminer';
                                            $icon = 'success';
                                            $info = 'Terminer';
                                        }else if($value->admin_display == 0){
                                            $progress = 'En attente';
                                            $icon = 'warning';
                                            $info = 'valider';
                                        }else{
                                            $progress = 'En cours...';
                                            $icon = 'info';
                                            $info = 'En cours';
                                        }
                                    ?>
                                        <td>
                                            <span>Status</span><small class="text-center text-<?=$icon?>"> <?=$progress?></small><br>
                                            <span>Début</span><small> <?=$value->start_date?></small><br>
                                            <span>Fin</span><small> <?=$value->end_date?></small>
                                        </td>
                                        <!-- <td class="text-center text-<?=$icon?>"><?=$progress?></td> -->
                                        <td class="text-center"><?=$value->participant?></td>
                                        <td class="text-center">
                            <?php 
                              if ($value->admin_display == '1') {
                                $modal = '#notify';
                              }else{
                                $modal = '#valider';
                              }
                            ?>
                                            <button class="btn btn-<?=$icon?> mt-1" style="font-size: 10px;" type="button" data-toggle="modal" data-target="<?=$modal?>" data-id="<?=$value->id?>"><?=$info?></button>
                                            <button class="btn btn-danger mt-1" type="button"  onclick="delete_product(<?=$value->id?>)" style="font-size: 10px;"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                            <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="valider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row d-flex justify-content-center">
                        <p>Si le produit a déjà été deposer, Voulez vous vraiment Valider ce produit?</p>
                        <p>Veuiller Definir les information ci-dessous puis valider.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="hidden" id="current_product_id" name="current_product_id">
                    <div class="row form-group">
                        <label class="col-sm-5 col-form-label">Montant Mise</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control shadow-none" id="mise" name="mise" required="" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-5 col-form-label">Nombre participant</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control shadow-none" id="participant" name="participant" required="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mx-3" id="ValiderProduct">Valider</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="notify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row d-flex justify-content-center">
                        <p>Ce produit est deja valider Pour être afficher site la platform!</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © MDC 2021</span></div>
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
</body>

</html>