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
  <?php include('includes/loader_seller.php');?>
  <div class="container-scroller"style="display:none;" id="body_content">
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
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Aperçu</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-month-outline icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Selectionner une date</small>
                            <input type="date" class="form-control" name="date" id="date">
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenu</small>
                            <h5 class="mr-2 mb-0">$ 0</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart mr-3 icon-lg text-info"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article Poster</small>
                            <h5 class="mr-2 mb-0"><?=$posted_article?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart-check mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article Valide</small>
                            <h5 class="mr-2 mb-0"><?=$validated_article?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart-minus mr-3 icon-lg text-info"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article Pas valider</small>
                            <h5 class="mr-2 mb-0"><?=$not_validated_article?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart-arrow-right mr-3 icon-lg text-info"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article En Vente</small>
                            <h5 class="mr-2 mb-0"><?=$in_sale_article?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart-arrow-up mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article Vendu</small>
                            <h5 class="mr-2 mb-0"><?=$sold_article?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cart-heart mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Article Aimer</small>
                            <h5 class="mr-2 mb-0"><?=$liked_article?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Status des Produits</h4>

                  <div class="table-responsive">
                    <table class="table table-hover" id="mytable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Produits</th>
                          <th>Pourcentage</th>
                          <th>Personnes</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
<?php 
  $count = 1; 
  foreach ($produit_en_seller as $key => $value):
    $num_row[$key] = $this->db->get_where('produit_en_vente',array('product_id'=>$produit_en_seller[$key]['product_id'],'seller_id'=>$produit_en_seller[$key]['seller_id']))->num_rows();
    if ($num_row[$key] == $produit_en_seller[$key]['participant']) {
      $icon = 'badge badge-danger';
      $info = 'Venter Termier';
    }else{
      $icon = 'badge badge-info';
      $info = 'En cours de Vente';
    }
?>
                          <tr>
                            <td><?=$count?></td>
                            <td><?=$produit_en_seller[$key]['product']?></td>
                            <td class="text-info"> <?php $percetage = $num_row[$key] * $produit_en_seller[$key]['participant'] / 100; echo $percetage;?>% <i class="mdi mdi-arrow-up"></i></td>
                            <td><h5 class="mr-2 mb-0"> <?=$num_row[$key] .' / '.$produit_en_seller[$key]['participant']?></h5></td>
                            <td><label class="<?=$icon?> text-white"><?=$info?></label></td>
                          </tr>
<?php 
  $count++; 
  endforeach; 
?>
                        
                        <!-- <tr>
                          <td>2</td>
                          <td>Flash</td>
                          <td class="text-info"> 21.06% <i class="mdi mdi-arrow-up"></i></td>
                          <td><i class="mdi mdi-eye mr-3 text-success"></i><h5 class="mr-2 mb-0">550</h5></td>
                          <td><label class="badge badge-warning text-white">En Promotion</label></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Premier</td>
                          <td class="text-info"> 35.00% <i class="mdi mdi-arrow-up"></i></td>
                          <td><i class="mdi mdi-eye mr-3 text-success"></i><h5 class="mr-2 mb-0">550</h5></td>
                          <td><label class="badge badge-info text-white">Plus en Stock</label></td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=$profile?>" alt="Client" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?=$connected_user[0]['username']?></h4>
                      <p class="text-secondary mb-1"><?=$connected_user[0]['country'].'-'.$connected_user[0]['province'].'-'.$connected_user[0]['city']?></p>
                      <p class="text-muted font-size-sm">Vendeur depuis <?=date('Y-m-d H:i',$connected_user[0]['add_date'])?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Total sales</p>
                  <h1>$ 28835</h1>
                  <h4>Gross sales over the years</h4>
                  <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
                  <div id="total-sales-chart-legend"></div>
                </div>
                <canvas id="total-sales-chart"></canvas>
              </div>
            </div> -->
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
