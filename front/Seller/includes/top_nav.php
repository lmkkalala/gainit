 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
      <a class="navbar-brand brand-logo" href="<?=site_url('Welcome/index')?>"><img src="<?=base_url()?>assets_client/images/logo1.png" alt="logo" style="height:25px;width:150px;"/></a>
      <a class="navbar-brand brand-logo-mini" href="<?=site_url('Welcome/index')?>"><img src="<?=base_url()?>assets_client/images/logo1.png" alt="logo"/></a>
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-sort-variant"></span>
      </button>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav mr-lg-4 w-100">
      <!-- <li class="nav-item nav-search d-none d-lg-block w-100">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="search">
              <i class="mdi mdi-magnify"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="..." aria-label="search" aria-describedby="search">
        </div>
      </li> -->
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <!-- <li class="nav-item dropdown mr-1">
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-message-text mx-0"></i>
          <span class="count"></span>
        </a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item">
            <div class="item-thumbnail">
                <img src="<?=base_url()?>assets_client/images/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="item-content flex-grow">
              <h6 class="ellipsis font-weight-normal">David Grey
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <a class="dropdown-item">
            <div class="item-thumbnail">
                <img src="<?=base_url()?>assets_client/images/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="item-content flex-grow">
              <h6 class="ellipsis font-weight-normal">Tim Cook
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                New product launch
              </p>
            </div>
          </a>
          <a class="dropdown-item">
            <div class="item-thumbnail">
                <img src="<?=base_url()?>assets_client/images/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="item-content flex-grow">
              <h6 class="ellipsis font-weight-normal"> Johnson
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                Upcoming board meeting
              </p>
            </div>
          </a>
        </div>
      </li> -->
      <!-- <li class="nav-item dropdown mr-4">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-success">
                <i class="mdi mdi-information mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-warning">
                <i class="mdi mdi-settings mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">Paramètres</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Messages Privés
              </p>
            </div>
          </a>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-info">
                <i class="mdi mdi-account-box mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                  Y a 2 jours
              </p>
            </div>
          </a>
        </div>
      </li> -->
      <?php
      $file = file_exists('assets/img/user/'.$connected_user[0]['profile']); 
        if ($file) {
          $profile =  base_url('assets/img/user/').$connected_user[0]['profile'];
        }else{
           $profile = base_url('assets/img/author/author_1.png');
        }
      ?>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?=$profile?>" alt="profile"/>
          <span class="nav-profile-name"><?=$connected_user[0]['username']?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="<?=site_url('Welcome')?>">
            <i class="mdi mdi-web text-primary"></i>
            Retour au site
          </a>
          <a class="dropdown-item" href="<?=site_url('Welcome/index/profil_vendeur')?>">
            <i class="mdi mdi-cog-outline text-primary"></i>
            Profile
          </a>
          <a class="dropdown-item" href="<?=base_url('Logout')?>">
            <i class="mdi mdi-logout text-primary"></i>
            Deconnexion
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
