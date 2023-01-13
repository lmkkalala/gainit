<?php include("assets/includes/head.php");?>

<body>
    <!--? Preloader Start -->
    <?php include("assets/includes/include_preloader.php"); ?>
    <!-- Preloader Start -->
<?php if ($this->session->message != ''): ?>
   <script type="text/javascript">
        iziToast.show({
                    theme: 'white',
                    icon: 'fas fa-info',
                    timeout: 8000,
                    position: 'topRight',
                    message: "<?=$this->session->message?>",
                    progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>  
<?php $this->session->message = ''; endif; ?>
    <!-- Header Start -->
    <?php include("assets/includes/include_header.php"); ?>
    <!-- Header End -->
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/download.jfif')?>');background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Boutiques</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container" style="margin-top:-12%;">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#"  aria-controls="nav-home" aria-selected="true">Boutiques</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
                <?php if (!empty($shop_show)) { ?>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                    <?php foreach ($shop_show as $key => $value){ ?>
                            <div class="col-md-3 col-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img" style="max-height:190px;">
                                                <img src="<?=base_url('assets/img/cover_store/'.$shop_show[$key]['cover_store_image'])?>" class="img-fluid leazyLoad" alt="" style="margin-bottom: 0px;height: auto;">
                                                <div class="img-cap" style="margin-top:0px;">
                                                    <!-- <span><?=$shop_show[$key]['email']?></span>
                                                    <span style="margin-top:-12%;"><?=$shop_show[$key]['phone']?></span> -->
                                                    <span>
                                                        <i class="icofont-food-cart" style="font-size:20px"></i> 
                                                        <a href="<?=base_url('Welcome/product/'.md5($shop_show[$key]['id']))?>"> <?=$shop_show[$key]['store_name']?></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <a href="<?=base_url('Welcome/product/'.md5($shop_show[$key]['id']))?>">
                                                    <p><?=$shop_show[$key]['description']?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }?>
                        </div> 
                    </div>
                    <!-- Card two -->
                </div>
                <?php }?>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->

        <!-- Shop Method End-->
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
    <!-- All JS Custom Plugins Link Here here -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery_lazyload/1.5.0/jquery.lazyload.min.js" integrity="sha512-Yuxcsjk8eH6ySp4HUOWZYSj5PG3xUU7kpyWeY0mmCqxUH1LyG70wS5fgr3NN1liyn+52Ki9sQ1R+BmzMfeRpMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $("img.leazyLoad").lazyload();
    </script>
</body>
</html>
