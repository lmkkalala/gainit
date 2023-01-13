<!-- <link rel="stylesheet" href="<?=base_url('assets/css/sweetalert2.min.css')?>">
<script src="<?=base_url('assets/js/sweetalert2.min.js')?>"></script> -->
<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="<?=site_url('Welcome')?>"><img src="<?=base_url('assets/img/logo/logo1.png')?>" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="<?=site_url('Welcome')?>">Accueil</a></li>
                                <li><a href="<?=site_url('Welcome/index/shop')?>">Boutiques</a></li>
                                 <li><a href="<?=site_url('Welcome/index/article')?>">Articles</a></li>
                                <li><a href="<?=site_url('Welcome/index/about')?>">A Propos</a></li>
                                <li><a href="<?=site_url('Welcome/index/contact')?>">Contact</a></li>
                                <li><a href="<?=site_url('Welcome/index/testimonies')?>">Témoignages</a></li>
                                <!-- <li class="hot"><a href="#">Latest</a>
                                    <ul class="submenu">
                                        <li><a href="shop.php"> Product list</a></li>
                                        <li><a href="product_details.php"> Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="elements.php">Element</a></li>
                                        <li><a href="confirmation.php">Confirmation</a></li>
                                        <li><a href="checkout.php">Product Checkout</a></li>
                                    </ul>
                                </li> -->
                            <?php if (isset($this->session->names)): ?>
                                <!-- <li>
                                    <a href="#">Profile</a>
                                    <ul class="submenu" style="width:auto;">
                                        <li><a href="#"><img src="<?=base_url('assets/img/user/'.$this->session->profile)?>" height="50" width="50" style="border-radius: 50%;" align="center"></a></li>
                                        <li><a href="#" style="font-size:12px;"><?=$this->session->names?></a></li>
                                        <li><a href="#" style="font-size:12px;"><?=$this->session->email?></a></li>
                                        <li><a href="#" style="font-size:12px;"><?=$this->session->usertype?></a></li>
                                        <hr class="text-danger">
                                        <li><a href="#" style="font-size:12px;">Voir Profile</a></li>
                                        <li><a href="#" style="font-size:12px;">Section Client</a></li>
                                        <li><a href="<?=base_url('Logout')?>" style="font-size:12px;">Deconnexion</a></li>
                                    </ul>
                                </li> -->
                            <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <!-- <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li> -->
                        <?php if (!isset($this->session->names)): ?>   
                            <li><a href="<?=site_url('Welcome/index/login')?>"><span class="flaticon-user"></span></a></li>
                        <?php elseif(isset($this->session->names)): ?>
                            <li>
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><span class="flaticon-user"></span></a>
                              <div class="dropdown-menu dropdown-menu-right dark">
                                <a href="#" class="btn-success bnt-sm" style="padding:10px;" disabled>Connecté</a>
                                <button class="dropdown-item" type="button" disabled style="margin-top:10px;background:rgba(0,0,0, 0.02);padding:10px;">
                                  <img src="<?=base_url('assets/img/user/'.$this->session->profile)?>" alt="" width="50"><span disabled><?=$this->session->names?></span>

                                </button>
                                <hr>
                                <a class="dropdown-item" href="<?=base_url('Welcome/index/mon_compte')?>" type="button"><span class="icofont-user"></span>Mon Profile </a>
<?php if ($this->session->usertype == 'client'): ?>
                        <a class="dropdown-item" href="<?=site_url('Welcome/index/mon_compte?commandes')?>" type="button"><span class="icofont-ui-home"></span>Espace Client</a>
<?php elseif($this->session->usertype == 'seller'): ?>
                         <a class="dropdown-item" href="<?=site_url('Welcome/index/seller')?>" type="button"><span class="icofont-ui-home"></span>Espace Vendeur</a>
<?php elseif($this->session->usertype == 'admin'): ?>    
                        <a class="dropdown-item" href="<?=site_url('Welcome/index/admin')?>" type="button"><span class="icofont-ui-home"></span>Espace Administrateur</a>
<?php endif; ?>

<?php if(!empty($this->session->session_change)): ?>    
                        <a class="dropdown-item" href="<?=site_url('Welcome/go_to/'.$this->session->session_change)?>" type="button"><span class="icofont-exchange"></span>Compte Principale</a>
<?php endif; ?>


                                <hr>
                                <a href="<?=base_url('Logout')?>" type="button" class="btn btn-danger dropdown-item shadow-none" name="button" style="padding:20px;text-align:center;background-color: #28a745;"><i class="icofont-exit"></i> Deconnexion</a>
                              </div>
                            </li>
                        <?php endif;?>
                            <li><a href="<?=site_url('Welcome/index/cart')?>"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</header>
