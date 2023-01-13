  <style media="screen">
  .modal {
    background: rgba(0, 0, 0, 0.5);

  }

  .modal-dialog {
    max-width: 900px; }

  .modal-content {
    border: none;
    position: relative;
    padding: 50px !important;
    font-size: 14px;
    overflow: hidden;
    color: rgba(255, 255, 255, 0.8);
    background: #c859ff;
    background: -moz-linear-gradient(45deg, #141e30 0%, #243b55 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #141e30), color-stop(100%, #243b55));
    background: -webkit-linear-gradient(45deg, #141e30 0%, #243b55 100%);
    background: -o-linear-gradient(45deg, #141e30 0%, #243b55 100%);
    background: -ms-linear-gradient(45deg, #141e30 0%, #243b55 100%);
    background: linear-gradient(45deg, #141e30 0%, #243b55 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#141e30', endColorstr='#243b55', GradientType=1 );
    -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
    box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); }

    .modal-content h3 {
      color: #fff;
      font-weight: 300; }
    .modal-content .modal-header {
      padding: 0;
      border: none; }
    .modal-content button.close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 0;
      margin: 0;
      width: 40px;
      height: 40px;
      z-index: 1;
      text-shadow: none;
      background: rgba(0, 0, 0, 0.1); }
    .modal-content .modal-body {
      border: none; }
    .modal-content .modal-footer {
      border: none;
      background: #f8f8f8; }
    .modal-content .form-control {
      background: transparent;
      border: none;
      padding: 0;
      height: 40px;
      color: rgba(255, 255, 255, 0.8);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 0; }
      .modal-content .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: rgba(255, 255, 255, 0.8) !important; }
      .modal-content .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: rgba(255, 255, 255, 0.8) !important; }
      .modal-content .form-control:-ms-input-placeholder {
        /* IE 10+ */
        color: rgba(255, 255, 255, 0.8) !important; }
      .modal-content .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: rgba(255, 255, 255, 0.8) !important; }
    .modal-content .btn {
      font-weight: 500;
      height: 52px; }
      .modal-content .btn .btn-primary {
        background: #f9e090 !important; }
    .modal-content .social {
      width: 100%; }
      .modal-content .social a {
        width: 100%;
        display: block;
        border: 1px solid rgba(255, 255, 255, 0.4);
        color: #000;
        background: #fff; }
        .modal-content .social a:hover {
          background: transparent;
          color: #fff; }

  .divider {
    position: relative; }
    .divider:after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      content: '';
      width: 1px;
      height: 100%;
      background: rgba(255, 255, 255, 0.2);
      margin: 0 auto; }

  .form-check {
    padding: 0; }

  .fill-checkbox {
    --color: #f9e090; }
    .fill-checkbox .fill-control-input {
      display: none; }
      .fill-checkbox .fill-control-input:checked ~ .fill-control-indicator {
        background-color: var(--color);
        border-color: var(--color);
        background-size: 80%; }
      .fill-checkbox .fill-control-input:checked ~ .fill-control-description {
        color: #fff; }
    .fill-checkbox .fill-control-indicator {
      border-radius: 3px;
      display: inline-block;
      position: absolute;
      top: 5px;
      left: 0;
      width: 16px;
      height: 16px;
      border: 1px solid rgba(255, 255, 255, 0.4);
      -webkit-transition: .1s;
      -o-transition: .1s;
      transition: .1s;
      background: transperent;
      background-size: 0%;
      background-position: center;
      background-repeat: no-repeat;
      content: 'hey';  .fill-checkbox .fill-control-description {
      color: rgba(255, 255, 255, 0.6); }

  .form-check.disabled .fill-checkbox {
    --color: rgba(255,255,255,.4); }
    .form-check.disabled .fill-checkbox .fill-control-description {
      color: rgba(255, 255, 255, 0.4); }

  </style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?=site_url('Welcome/index/seller')?>">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#categorie">
        <i class="mdi mdi-plus-box menu-icon" style="font-size: 20px;margin-left: 3px;"></i>
        <span class="menu-title">Ajouter Categorie Produits</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-view-list menu-icon"></i>
        <span class="menu-title">Produits</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?=site_url('Welcome/index/produits')?>">List</a> </li>
          <!-- <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/produit_vente')?>">Vente Encours</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/vendu')?>">Vendu</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#categorie">Ajouter Categorie Produits</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="nouveau_produit.php">Ajouter Nouveau Produit</a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-view-list menu-icon"></i>
        <span class="menu-title">Vente Encours</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <!-- <li class="nav-item"><a class="nav-link" href="<?=site_url('Welcome/index/produits')?>">Produits</a> </li> -->
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/produit_vente')?>">List</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/vendu')?>">Vendu</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#categorie">Ajouter Categorie Produits</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="nouveau_produit.php">Ajouter Nouveau Produit</a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-view-list menu-icon"></i>
        <span class="menu-title">Produits Vendu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic3">
        <ul class="nav flex-column sub-menu">
          <!-- <li class="nav-item"><a class="nav-link" href="<?=site_url('Welcome/index/produits')?>">Produits</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/produit_vente')?>">Vente Encours</a></li> -->
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/vendu')?>">List</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#categorie">Ajouter Categorie Produits</a></li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="nouveau_produit.php">Ajouter Nouveau Produit</a></li> -->
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="mdi mdi-message-bulleted menu-icon"></i>
        <span class="menu-title">Message Client</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#contactUs">
        <i class="mdi mdi-card-account-mail-outline menu-icon"></i>
        <span class="menu-title">Contacter Administrateur</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="mdi mdi-cog-outline menu-icon"></i>
        <span class="menu-title">Paramètres</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/profil_vendeur')?>">Mon Profil </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/modifier_profil')?>">Modifier Profil </a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/mot_de_passe')?>">Changer Mot de Passe </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/compte_payement')?>">Compte de Paiement</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?=site_url('Welcome/index/supprimer_compte')?>">Supprimer Compte </a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=site_url('Welcome/index/journal_system')?>">
        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
        <span class="menu-title">Journal Système</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=base_url('Logout')?>">
        <i class="mdi mdi-logout menu-icon"></i>
        <span class="menu-title">Deconnexion</span>
      </a>
    </li>

  </ul>
</nav>


<!-- model -->

  <div class="modal fade" id="categorie" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xs" role="document" style="width: 600px;">
      <div class="modal-content">
        <div class="row">
          <div class="col-md-12 mb-1 mt-1">
            <div class="modal-body p-0">
              <form class="form-sample" id="FormCategory">
                <h3 class="mx-5 mb-4 mt-4">Ajouter Categorie Produit</h3>
                <div class="row mb-2 mx-4">
                  <div class="col-md-8">
                    <div class="form-group row">
                        <span class="col-sm-3 col-form-label mt-1">Categorie</span>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="categorie" id="category" required="" autocomplete="off" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                      <div class="col-sm-9 col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm shadow-none"> <i class="spinner-grow spinner-grow-sm text-light fs-5" role="status" style="display: none;" id="categorie_loader"></i> Ajouter</button>
                      </div>
                    </div>
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

  <!-- model -->
  <div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 700px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="ion-ios-close"></span>
          </button>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="modal-body p-0">
              <h3 class="mb-4">Envoyer nous un message!</h3>
              <form class="form-sample" id="Contact_admin" method="Post" action="<?=base_url('Admin/contact')?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Votre Noms</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="names" name="names" required="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address mail</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" required="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Téléphone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="phone" name="phone"required="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-6 col-form-label">Message</label>
                      <div class="col-sm-12">
                        <textarea name="message" id="message" class="form-control" rows="20" cols="50" required=""></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="row">
                      <button type="submit" class="btn btn-primary" id="submit_button" name="submit_button" style="align-items:center;margin-left:30px">
                        <i class="mdi mdi-send" role="status" id="send_message"></i> Envoyer
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

