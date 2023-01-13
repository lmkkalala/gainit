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
                  <h2 class="card-title" style="font-size:20px;">Produits Vendu</h2>
                  <div class="table-responsive">
                    <table id="mytable" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Nom du produit</th>
                          <th>Categorie</th>
                          <th>Prix Article</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
  $count = 1;
  foreach ($products_show_sell as $key => $value) :
?>
                        <tr>
                          <td><?=$count?></td>
                          <td class="py-1">
                            <img src="<?=base_url('dist/produit/').$products_show_sell[$key]['caption_image']?>" alt="image"/>
                          </td>
                          <td style="width: 150px;"><?=$products_show_sell[$key]['product']?></td>
                          <td><?=$products_show_sell[$key]['category_product']?></td>
                          <td><?=$products_show_sell[$key]['prix_vente']?></td>
                          <td style="height: 80px;width: 250px;">
                            <div style="overflow-y: auto; max-height: 70px;margin-top: -10px;max-width: 250px;"><p><?=$products_show_sell[$key]['description']?></p></div>
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Updatemodal" data-id="<?=$products_show_sell[$key]['id']?>" ><i class="mdi mdi-grease-pencil"></i></button>
                             <?php 
                              if ($products_show_sell[$key]['display_status'] == '1') {
                                $value1 = 'success'; //Article deja vendu confirmation de la vente parle le vendeur
                                $icon =  'checkbox-multiple-marked';
                              }else{
                                $value1 = 'info';
                                $icon =  'checkbox-multiple-blank';
                              }
                            ?>
                            <button type="button" name="button" class="btn btn-<?=$value1?> btn-sm" data-toggle="modal" data-target="#valideVente" data-id="<?=$products_show_sell[$key]['id']?>"><i class="mdi mdi-<?=$icon?>"></i></button>
                          </td>
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

  <!-- model -->
  <div class="modal fade" id="valideVente" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 450px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-ios-close  text-white"></span></button>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="modal-body p-0">
              <div class="row d-flex justify-content-left">
                <p>Voulez vous confirmer la vente de ce produit?</p>
                 <div class="col-md-12 mt-2">
                    <form id="testimony_and_validation_form">
                      <textarea class="form-control" id="testimony_message" name="testimony_message" placeholder="Votre temoignage" style="height: 150px;"></textarea>
                      <div class="row mt-2">
                          <input type="hidden" id="product_sold_id" name="product_sold_id" value="">
                          <input type="hidden" id="identifier" name="identifier" value="<?=$this->session->identifier?>">
                          <button type="submit" id="submit_testimony" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                            <i class="mdi mdi-checkbox-multiple-marked-outline"></i> Valider
                          </button>
                           <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                            <i class="mdi mdi-close"></i> Annuler
                          </button>
                      </div>
                    </form>
                  </div>
              </div>
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
