<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gain IT - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets_client/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.4.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets_client/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?=base_url()?>assets_client/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets_client/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>assets_client/images/favicon.ico" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include("includes/top_nav.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include("includes/sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="row gutters-sm col-md-12">
                <div class="col-md-4 mb-12 image">
                  <div class="card" style="padding:30px;">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="images/faces/face4.jpg" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>John Doe</h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <style media="screen">
                            .caption
                            {
                              font-style: normal;
                              font-weight: normal;
                              font-size: 15px;
                              padding: 20px;
                            }
                            .mb-0
                            {
                              margin: auto;
                            }
                            .heading
                            {
                              font-size: 20px;
                              font-weight: normal;
                              font-family: times;
                              text-align: center;
                            }
                          </style>
                          <h1 class="heading btn btn-primary">Suppression Compte</h1>
                          <h6 class="mb-0 caption">

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.

                          </h6>

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-0">
                            <i class="mdi mdi-alert" style="font-size:40px;color:red;"></i>
                          </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                          <p>
                            Une fois votre compte supprimer, vous n'aurez plus accès à la plateforme et
                            il vous faudra créer un autre compte pour profiter des services et avantages
                            de la plateforme.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <p>Souhaitez-vous supprimer votre Compte?</p>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-6">
                          <button type="button" class="btn btn-primary" name="button"><i class="mdi mdi-window-close" style="font-size:15px;"></i> Annuler</button>
                          <button type="button" class="btn btn-danger" name="button"><i class="mdi mdi-delete" style="font-size:15px;"></i> Supprimer</button>
                        </div>
                        <div class="col-sm-2">

                        </div>

                      </div>

                    </div>
                  </div>


                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Tous Droits réservés.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php include('includes/footer.php')?>
</body>

</html>
