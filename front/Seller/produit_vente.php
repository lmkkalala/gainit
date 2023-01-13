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
                  <h2 class="card-title" style="font-size:20px;">Produits encours de Vente</h2>
                  <div class="table-responsive">
                    <table id="mytable" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Nom du produit</th>
                          <th>Categorie</th>
                          <th>Prix Article</th>
                          <th>Progression de la vente</th>
                          <!-- <th>Prix Mise</th> -->
                          <!-- <th>Description</th> -->
                        </tr>
                      </thead>
                      <tbody>
<?php
  $count = 1;
  foreach ($products_show as $key => $value) :
    $num_row[$key] = $this->db->get_where('produit_en_vente',array('product_id'=>$products_show[$key]['id'],'seller_id'=>$products_show[$key]['user_id']))->num_rows();
?>
                        <tr>
                          <td><?=$count?></td>
                          <td class="py-1">
                            <img src="<?=base_url('dist/produit/').$products_show[$key]['caption_image']?>" alt="image"/>
                          </td>
                          <td style="width: 150px;"><?=$products_show[$key]['product']?></td>
                          <td><?=$products_show[$key]['category_product']?></td>
                          <td><?=$products_show[$key]['prix_vente']?></td>
<?php
  $value_now = $num_row[$key];
  $value_max = $products_show[$key]['participant'];
  if ($value_now != $value_max) :
?>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?=$value_now?>%" aria-valuenow="<?=$value_now?>" aria-valuemin="0" aria-valuemax="<?=$value_max?>"></div>
                            </div>
                            <button type="button" class="btn btn-info btn-sm mt-1" disabled>
                                  <i class="mdi mdi-progress-clock" style="font-size:25px;"></i>
                                  <span style="width: 100px;"> Vente, En cours.</span>
                            </button>
                          </td>
<?php else: ?>
                          <td>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?=$value_now?>%" aria-valuenow="<?=$value_now?>" aria-valuemin="0" aria-valuemax="<?=$value_max?>">
                                </div>
                              </div>
                              <!-- <p><?=$value_now .' / '.$value_max?></p> -->
                              <?php if ($products_show[$key]['validate_tirage'] == '1'): ?>
                                <a href="<?=base_url('Welcome/index/vendu/').$products_show[$key]['id']?>" class="btn btn-primary btn-sm mt-1">
                                  <i class="mdi mdi-progress-check" style="font-size:25px;"></i>
                                  <span style="width: 100px;"> Vendu, Click ICI.</span>
                                </a>
                              <?php else:?>
                                  <button type="button" class="btn btn-success btn-sm mt-1" disabled>
                                      <i class="mdi mdi-progress-clock" style="font-size:25px;"></i>
                                      <span style="width: 100px;"> Tirage en cours.</span>
                                </button>
                              <?php endif; ?>
                            </div>
                          </td>
<?php endif; ?>
                         <!--  <td><?=$products_show[$key]['mise']?></td> -->
                          <!-- <td style="height: 80px;width: 400px;">
                            <div style="overflow-y: auto; max-height: 70px;margin-top: -10px;max-width: 400px;"><p><?=$products_show[$key]['description']?></p></div>
                          </td> -->
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
    <div class="modal fade" id="modal_vente" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                <h3 class="mb-4">Ajouter Produit en Vente</h3>

                <form class="form-sample">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Produit</label>
                        <div class="col-sm-9">
                          <input name="image1" type="file" class="form-control">
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
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label">Déscription & Caractéristiques</label>
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
                          <i class="mdi mdi-plus"></i> Ajouter
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
