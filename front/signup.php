<?php include("assets/includes/head.php");?>
<body>
  <!--? Preloader Start -->
  <?php include("assets/includes/include_preloader.php"); ?>
  <!-- Preloader Start -->

  <!-- Header Start -->
  <?php include("assets/includes/include_header.php"); ?>
  <!-- Header End -->

<?php 
    if (!empty($this->session->flashdata('delete'))){
        if ($this->session->flashdata('delete') == 'Compte d\'utilisateur supprimer avec succes.') {
            $icon = 'fas fa-check';
        }else{
            $icon = 'fas fa-info';
        }
?> 
    <script type="text/javascript">
         iziToast.show({
                    theme: 'white',
                    icon: '<?=$icon?>',
                    timeout: 8000,
                    position: 'topRight',
                    message: "<?=$this->session->flashdata('delete')?>",
                    progressBarColor: 'rgb(0, 255, 184)',
            });
    </script>
<?php }?>

<?php if (isset($info)){ ?> 
<script type="text/javascript">
    iziToast.show({
                    theme: 'white',
                    icon: 'fas fa-info',
                    timeout: 8000,
                    position: 'topRight',
                    message: "<?=$info?>",
                    progressBarColor: 'rgb(0, 255, 184)',
    });
</script>
<?php }?>

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area" style="margin-bottom:-18%;">
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/download.jfif')?>');background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Inscription</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding" style="margin-bottom:-15%;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3 class="text-center">Bienvenu à la Platform des chançard<br>
                                    <small>Veuillez vous inscrire maintenant!</small></h3>
                                <form class="row contact_form" action="<?=site_url('Login/register')?>" method="post" enctype="multipart/form-data">
                                    <div class="col-md-12 form-group p_star">
                                        <span>Photo Profile</span>
                                        <input type="file" class="form-control" id="image_profile" name="image_profile" value="<?=set_value('image')?>" placeholder="Photo Profile" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="names" name="names" value="<?=set_value('names')?>"
                                            placeholder="Noms d'utilisateur" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="email" name="email" value="<?=set_value('email')?>"
                                            placeholder="Address mail" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="tel" class="form-control" id="phone" name="phone" value="<?=set_value('phone')?>"
                                            placeholder="Téléphone" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <select class="form-control w-100" name="user_type" id="user_type" required="" onchange="display(value)">
                                            <option value="<?=set_value('user_type')?>">Type Utilisateur</option>
                                            <option value="client">Client</option>
                                            <option value="seller">Vendeur</option>
                                        </select>
                                    </div>
<script type="text/javascript">
    function display(value){
        if (value == 'seller') {
            $('#seller_info').toggle();
        }else{
            $('#seller_info').hide();
        }
    }
</script>
                                    <div class="col-md-12 form-group p_star" id="seller_info" style="display: none;">
                                        <input type="text" class="form-control mt-3 mb-3" id="store_name" name="store_name" value=""
                                            placeholder="Nom de la boutique" value="<?=set_value('store_name')?>">
                                        <span>Photo Couverture Boutique</span>
                                        <input type="file" class="form-control" id="cover_store_image" name="cover_store_image" value="<?=set_value('cover_store_image')?>">
                                        <textarea class="form-control mt-3 fs-6" style="max-height: 100px;min-height: 100px; overflow-y:hidden;font-size: 12px;" id="description" name="description" placeholder="Decriver En quelque mot votre boutique ... max 250" value="<?=set_value('description')?>"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <select class="form-control w-100" name="country" required="">
                                            <option value="<?=set_value('country')?>">Selectionner Pays</option>
                                            <option value="drc">Republique Democratique du Congo</option>
                                            <option value="rwanda">Rwanda</option>
                                            <option value="burundi">Burundu</option>
                                            <option value="uganda">Uganda</option>
                                            <option value="tanzani">Tanzanie</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="province" name="province" value=""
                                            placeholder="Province" value="<?=set_value('province')?>" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="city" name="city" value=""
                                            placeholder="Ville" value="<?=set_value('city')?>" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="checkbox"  id="condition" name="condition" value="" required="">
                                        <label><a href="#" class="text-secondary">J'ai lu et compris <span class="text-info">les conditions d'utilisation</span></a></label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3">
                                            Enregistre
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Vous avez deja un compte?</h2>
                                <a href="<?=site_url('Welcome/index/login')?>" class="btn_3">Connection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
    <!-- Footer Start-->
    <?php include("assets/includes/include_footer.php"); ?>
    <!-- Footer End-->

    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->
    
    <script src="<?=base_url('assets/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?=base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?=base_url('assets/js/jquery.slicknav.min.js')?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/js/slick.min.js')?>"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="<?=base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/js/animated.headline.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.magnific-popup.js')?>"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?=base_url('assets/js/jquery.scrollUp.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.sticky.js')?>"></script>

    <!-- contact js -->
    <script src="<?=base_url('assets/js/contact.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.form.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.validate.min.js')?>"></script>
    <script src="<?=base_url('assets/js/mail-script.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?=base_url('assets/js/plugins.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>

</html>
