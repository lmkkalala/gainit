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

                  <div class="row">
                    <h2 class="card-title" style="font-size:20px;">Produits</h2>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                          <button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modal" name="button" style="margin-left:10px"><i class="mdi mdi-plus"></i> Ajouter Produit</button>
                        </div>
                      </div>
                    </div>
                  </div>
<style type="text/css">
  #mytable thead tr th{
    font-size: 13px;
  }
</style>
                  <div class="col-md-12 mt-4">
                    <div class="table-responsive">
                    <table id="mytable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Image</th>
                          <th>Nom du produit</th>
                          <th>Categorie</th>
                          <th>Prix</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
  $count = 1;
  foreach ($products_show as $key => $value) :

                              if ($products_show[$key]['display_status'] == '1') {
                                $value1 = 'success';
                                $icon =  'mdi-check-all';
                                $modal = '#notify';
                              }else{
                                $value1 = 'secondary';
                                $icon =  'mdi-check';
                                $modal = '#Session_display';
                              }
?>
                        <tr>
                          <td><?=$count?></td>
                          <td class="py-1">
                            <img src="<?=base_url('dist/produit/').$products_show[$key]['caption_image']?>" alt="image"/>
                          </td>
                          <td style="width: 150px;"><?=$products_show[$key]['product']?></td>
                          <td><?=$products_show[$key]['category_product']?></td>
                          <td><?=$products_show[$key]['prix_vente']?></td>
                          <td style="height: 80px;width: 350px;">
                            <div style="overflow-x: auto; max-height: 70px;margin-top: -10px;max-width: 350px;">
                              <p><?=$products_show[$key]['description']?></p>
                            </div>
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Updatemodal" data-id="<?=$products_show[$key]['id']?>" ><i class="mdi mdi-grease-pencil"></i></button><br>
                            <button type="button" name="button" class="btn btn-danger btn-sm mt-1" data-toggle="modal" data-target="#Deletemodal" data-id="<?=$products_show[$key]['id']?>"><i class="mdi mdi-delete"></i></button><br>
                            <button type="button" name="button" class="btn btn-<?=$value1?> btn-sm mt-1" data-toggle="modal" data-target="<?=$modal?>" data-id="<?=$products_show[$key]['id']?>"><i class="mdi <?=$icon?>"></i></button>
                          </td>
                        </tr>
<?php
  $count++;
  endforeach;
?>

                      </tbody>
                    </table>
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
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
              <h3 class="mb-4">Ajouter un Nouveau Produit</h3>
              <form class="form-sample" id="FormProduct" method="Post" action="<?=base_url('Vendeur/add_product')?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nom du Produit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="produit" name="produit" required="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Prix du Produit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="prix" name="prix"required="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Cover Image</label>
                      <div class="col-sm-9">
                        <input name="image1" id="image1" type="file" class="form-control" required="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Catégories</label>
                      <div class="col-sm-9">
                        <select class="form" style="border:1px solid 707070;padding:10px;width:290px;background:transparent;color:white;" id="categorie" name="categorie" required="">
                          <option value="" style="color:#000;">Choisir Catégorie</option>
                          <?php foreach ($category_show_all as $key => $value): ?>
                            <option style="color:#000;" value="<?=$category_show_all[$key]['categorie']?>"><?=$category_show_all[$key]['categorie']?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- 
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Montant Tirage</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="prixT" name="prixT" required="" />
                      </div>
                    </div>
                  </div> 
                  -->

                  <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Sous-catégories</label>
                      <div class="col-sm-9">
                        <select class="form" style="border:1px solid #707070;padding:10px;width:290px;background:transparent;color:white;">
                          <option selected disabled style="color:#000;">Choisir Sous-catégorie</option>
                          <option style="color:#000;">Smooking & Costumes</option>
                          <option style="color:#000;">Tricot & Jackets</option>
                          <option style="color:#000;">Chaussures</option>
                          <option style="color:#000;">T-shirt et porlo</option>
                          <option style="color:#000;">Pull</option>
                          <option style="color:#000;">Autres</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="row">
                  <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">image 2</label>
                      <div class="col-sm-9">
                        <input name="image2" type="file" class="form-control" />
                      </div>
                    </div>
                  </div> -->
                </div>

                <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image 3</label>
                      <div class="col-sm-9">
                        <input name="image3" type="file" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mot clé</label>
                      <div class="col-sm-9">
                        <input class="form-control" placeholder="ex : Smooking"/>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Déscription & Caractéristiques</label>
                      <div class="col-sm-12">
                        <textarea name="description" id="description" class="form-control" rows="20" cols="50" required=""></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="row">
                      <button type="submit" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-plus"></i> Ajouter
                      </button>
                       <button type="reset" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-refresh"></i> Reset
                      </button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-close"></i> Annuler
                      </button>
                    </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </form>
            </div>
          </div>
          <!--
          <div class="col-md">
            <div class="modal-body p-0">

              <form action="#" class="signup-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Prix du Produit">
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <select class="form-control">
                      <option selected disabled>Choisir Sous-catégorie</option>
                      <option>Smooking & Costumes</option>
                      <option>Tricot & Jackets</option>
                      <option>Chaussures</option>
                      <option>T-shirt et porlo</option>
                      <option>Pull</option>
                      <option>Autres</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                </div>
                <div class="form-group">
                  <div class="w-100">
                    <p class="mb-0">By creating an account, your agree to our terms.</p>
                  </div>
                </div>
              </form>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->


    <!-- model -->
  <div class="modal fade" id="Updatemodal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
              <div class="row">
                <div class="col-md-6">
                  <h3 class="mb-4">Modifier Produit</h3>
                </div>
                <div class="col-md-6">
                    <span><img src="" id="show_product" height="60" width="60"></span>
                  </div>
              </div>
              
              <form class="form-sample" id="FormProductUpdate" method="Post" action="<?=base_url('Vendeur/update_product')?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nom du Produit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="updateproduit" name="updateproduit" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Prix du Produit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="updateprix" name="updateprix" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="display:none;">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Montant Tirage</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="updateprixT" name="updateprixT" />
                      </div>
                    </div>
                  </div>
                  
                
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image Produit</label>
                      <div class="col-sm-9">
                        <input name="updateimage1" id="updateimage1" type="file" class="form-control">
                        <input name="old_image" id="old_image" type="hidden" class="form-control">
                        <input name="product_id" id="product_id" type="hidden" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Catégories</label>
                      <div class="col-sm-9">
                        <select class="form" style="border:1px solid 707070;padding:10px;width:290px;background:transparent;color:white;" id="updatecategorie" name="updatecategorie">
                          <option value="" style="color:#000;">Choisir Catégorie</option>
                          <?php foreach ($category_show_all as $key => $value): ?>
                            <option style="color:#000;" value="<?=$category_show_all[$key]['categorie']?>">
                              <?=$category_show_all[$key]['categorie']?>
                            </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Déscription & Caractéristiques</label>
                      <div class="col-sm-12">
                        <textarea name="updatedescription" id="updatedescription" class="form-control" rows="20" cols="60"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="row">
                      <button type="submit" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-check"></i> Modifier
                      </button>
                       <button type="reset" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-refresh"></i> Reset
                      </button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-close"></i> Annuler
                      </button>
                    </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->

  <!-- model -->
  <div class="modal fade" id="Deletemodal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 450px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-ios-close  text-white"></span></button>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="modal-body p-0">
              <div class="row d-flex justify-content-center">
                <p>Voulez vous vraiment supprimer ce produit?</p>
                 <div class="col-md-12">
                    <div class="row">
                      <input type="hidden" id="product_id" name="product_id" value="">
                      <button type="button" id="deleteProduct" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-delete"></i> Supprimer
                      </button>
                       <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-close"></i> Annuler
                      </button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->

   <!-- model session vente -->
  <div class="modal fade" id="Session_display" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 450px;" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-ios-close  text-white"></span></button>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="modal-body p-0">
              <div class="row d-flex justify-content-center">
                <p>Voulez vous vraiment Activer la session d'affichage pour ce produit?</p>
                <p>Veuiller Definir l'echeance du tirage!</p>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Date de début</label>
                          <div class="col-sm-7">
                            <input type="date" class="form-control" id="start_date" name="start_date" />
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Date de Fin</label>
                          <div class="col-sm-7">
                            <input type="date" class="form-control" id="end_date" name="end_date" />
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="col-md-12">
                      <input type="hidden" id="product_id_show" name="product_id_show" value="">
                      <button type="button" id="ActivateProduct" class="btn btn-primary" name="button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-check-all"></i> Activer
                      </button>
                       <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-close"></i> Annuler
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /modal -->

  
<!-- show notification in case the notify is already on -->
  <div class="modal fade" id="notify" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 450px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-ios-close  text-white"></span></button>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="modal-body p-0">
              <div class="row">
                  <div class="col-md-12 d-flex justify-content-center">
                    <p>La session de vente de ce produit est deja activer, suiver l'evolition dans le menu Vente en cours!</p>
                  </div>
                  
                  <div class="col-md-12 d-flex justify-content-center">
                       <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-close"></i> Fermer
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include('includes/footer.php')?>
</body>

</html>
