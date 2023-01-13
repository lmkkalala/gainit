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
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                      <h2 class="card-title" style="font-size:20px;">Produits en Promotion</h2>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>
                            Image
                          </th>
                          <th>
                            Nom du produit
                          </th>
                          <th>
                            Progression de Suscription
                          </th>
                          <th>
                            Prix
                          </th>
                          <th>Ratio</th>
                          <th>
                            Deadline
                          </th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>1$/Ticket</td>
                          <td>
                            15/04 - 30/04/2021
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="py-1">
                            <img src="images/faces/face2.jpg" alt="image"/>
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>1$/Ticket</td>
                          <td>
                            15/04 - 30/04/2021
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="py-1">
                            <img src="images/faces/face3.jpg" alt="image"/>
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $138.00
                          </td>
                          <td>6$/Ticket</td>
                          <td>
                            15/04 - 30/04/2021
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="py-1">
                            <img src="images/faces/face4.jpg" alt="image"/>
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>3$/Ticket</td>
                          <td>
                            15/04 - 30/04/2021
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td class="py-1">
                            <img src="images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 160.25
                          </td>
                          <td>3$/Ticket</td>
                          <td>
                            15/04 - 30/04/2021
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                          </td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modal_promotion" name="button" style="margin-left:10px">
                          <i class="mdi mdi-plus"></i> Ajouter Produit
                        </button>
                      </div>
                    </div>
                  </div>
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

    <!-- model -->
    <div class="modal fade" id="modal_promotion" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="ion-ios-close"></span>
            </button>
          </div>
          <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
              <div class="modal-body p-0">
                <h3 class="mb-4">Ajouter Produit en promotion</h3>

                <form class="form-sample">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Produit</label>
                        <div class="col-sm-9">
                          <select class="form" style="border:1px solid #707070;padding:10px;width:290px;background:transparent;color:white;">
                            <option selected disabled style="color:#000;">Choisir Produit</option>
                            <option style="color:#000;">Smooking & Costumes</option>
                            <option style="color:#000;">Tricot & Jackets</option>
                            <option style="color:#000;">Chaussures</option>
                            <option style="color:#000;">T-shirt et porlo</option>
                            <option style="color:#000;">Pull</option>
                            <option style="color:#000;">Autres</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Prix</label>
                        <div class="col-sm-9">
                          <input name="image2" type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deadline</label>
                        <div class="col-sm-9">
                          <input name="image3" type="date" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fin de promotion</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="date" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Montant</label>
                        <div class="col-sm-9">
                          <input name="image3" type="text" class="form-control" placeholder="1$ / Personne = 1Ticket" disabled/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <style media="screen">
                          .image-preset img
                          {
                            height: 90px;
                            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
                            border-radius: 5px;
                          }
                        </style>
                        <div class="col-sm-9 image-preset">
                          <img src="images/popular4.png" alt="image 1" >
                          <img src="images/popular4.png" alt="image 2" >
                          <img src="images/popular4.png" alt="image 3" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label">Déscription de la promotion</label>
                        <div class="col-sm-12">
                          <textarea name="description" class="form-control" rows="20" cols="50"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                      <div class="form-group row" >
                        <button type="button" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                          <i class="mdi mdi-plus"></i> Ajouter Promotion
                        </button>
                      </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /modal -->

<?php include('includes/footer.php')?>
</body>

</html>
