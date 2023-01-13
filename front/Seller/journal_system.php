<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gain IT - Commpte Vendeur</title>
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
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-size:20px;">Journal Système</h2>
                  <div class="table-responsive">
                    <table id="mytable" class="table">
                      <thead>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Utilisateur</th>
                          <th>Opération</th>
                          <th>Description</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
  $count = 1;
  foreach ($system_log as $key => $value) :
?>
                        <tr>
                          <!-- <td><?=$count?></td> -->
                          <td><?=$system_log[$key]['user']?></td>
                          <td><?=$system_log[$key]['operation']?></td>
                          <td><?=$system_log[$key]['description']?></td>
                          <td><?=$system_log[$key]['date']?></td>
                        </tr>
<?php
  $count++;
  endforeach;
?>

                      </tbody>
                    </table>
                  </div>
                  <br>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modal_vente" name="button" style="margin-left:10px">
                          <i class="mdi mdi-plus"></i> Ajouter Produit
                        </button>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer -->
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

<?php include('includes/footer.php')?>
</body>

</html>
