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
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow">
                                <img class="rounded-circle mb-3 mt-4" src="<?=base_url('assets/img/user/').$connected_user[0]['profile']?>" width="160" height="160">
                                <!-- <div class="mb-3">
                                    <input type="file" class="form-control mb-3" />
                                    <div class="row mb-3">
                                        <button class="btn btn-primary mx-1 btn-sm" type="button"><i class="icon ion-edit mx-1"></i>Changer Photo</button>
                                        <small class="mx-1">
                                            <a href="#" class="btn btn-danger btn-sm"><i class="icon ion-android-delete mx-1"></i> Supprimer compte</a>
                                        </small>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="card-body text-center shadow" style="margin-top: 74px;"><img class="rounded-circle mb-3 mt-4" src="<?=base_url()?>assets_admin/img/dogs/image2.jpeg" width="160" height="160">
                                <div class="mb-3"><small><i class="icon ion-android-delete"></i><a href="#" style="margin-right: -15px;margin-bottom: 3px;margin-top: 5px;margin-left: 12px;">Supprimer mon compte</a></small></div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-7">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Paramètres utilisateurs</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="username"><strong>Nom utilisateur</strong><br></label><input class="form-control" type="text" placeholder="nom utilisateur" value="<?=$connected_user[0]['username']?>" name="username" readonly></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label for="email"><strong>Adress mail</strong><br></label><input class="form-control" type="email" placeholder="utilisateur@example.com" value="<?=$connected_user[0]['email']?>" name="email" readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone"><strong>Téléphone</strong><br></label>
                                                        <input class="form-control" type="tel" placeholder="+243 996848331" value="<?=$connected_user[0]['phone']?>" name="phone" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group"><button class="btn btn-primary btn-sm w-100" type="submit">Modifier</button></div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="card shadow" >
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Information contacts&nbsp;</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group"><label for="address"><strong>Address</strong></label>
                                                <input class="form-control" type="text" placeholder="labotte, N° 32" value="<?=$connected_user[0]['province']?>" name="address" readonly>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city"><strong>Ville</strong><br></label><input class="form-control" type="text" placeholder="Bukavu" value="<?=$connected_user[0]['city']?>" name="city" readonly></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label for="country"><strong>Pays</strong><br></label><input class="form-control" type="text" placeholder="RDC" value="<?=$connected_user[0]['country']?>" name="country" readonly></div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group"><button class="btn btn-primary btn-sm w-100" type="submit">Modifier</button></div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-5">
                                <div class="card shadow" >
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Parametre de securite&nbsp;</p>
                                    </div>
                                <div class="card-body">
                                        <form>
                                            <div class="form-group"><label for="old_password"><strong>Ancient Mot de passe</strong></label>
                                                <input class="form-control" type="password" placeholder="" value="" name="old_password">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="new_password"><strong>Mot de passe</strong><br></label><input class="form-control" type="password" placeholder="" value="" name="new_password"></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label for="country"><strong>Confirmer Mot de passe</strong><br></label><input class="form-control" type="password" placeholder="" value="" name="conf_password"></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm w-100" type="submit">Modifier</button></div>
                                        </form>
                                    </div>
                                </div>
                    </div> -->
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
</body>

</html>