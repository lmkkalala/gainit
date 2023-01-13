<?php include("assets/includes/head.php");?>

<body>
    <!--? Preloader Start -->
    <?php //include("assets/includes/include_preloader.php"); ?>
    <!-- Preloader Start -->

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
                                <h2>Temoignages</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container-fluid" style="margin-top:-12%;">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> -->
                        <!-- <div class="row">
                            <div class="col-md-12 col-6" id="loader_image" style="display:none;margin-top: -10%;align-content: center;">
                                <img src="<?=base_url('assets/img/loading.gif')?>" style="margin-left: 50%;margin-top: 10%; width: 50px;" class="img-fluid">
                            </div>
                        </div> -->
                    
                        <div class="row mb-3">
                            <div class="col-md-3 col-lg-3 col-6 mb-2">
                                <div class="mx-1 w-100" style="background-color:#fff;padding: 5px; border: 1px solid #fff;border-radius: 5px;">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div style="background-color:#afafaf; height: 100px;"></div>
                                            <div  style="padding: 5px;z-index: 15;">
                                                <img src="<?=base_url('assets/img/user/942b99f7c861437c9f3d3835bb9b7fd9.jpg')?>" class="img-fluid" style="margin-bottom: 0px;height:auto;margin-top: -50px;background-color: #fff;padding: 5px;border-radius: 40%;" width="100"><br>
                                                <a href="#" class="text-dark small">Lucien MURHULA KALALA</a>
                                            </div>
                                            <div class="popular-caption">
                                                <p class="text-dark"><small>Votre refuge de tout les jours</small></p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php foreach ($testimony_list as $key => $value){ ?>
                            <div class="col-md-3 col-lg-3 col-6 mb-2">
                                <div class="mx-1 w-100" style="background-color:#fff;padding: 5px;box-shadow: 5px 5px 15px #000; border: 1px solid #fff;border-radius: 5px;">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div style="background-color:#afafaf; height: 100px;"></div>
                                            <div style="padding: 5px; z-index: 15;">
                                                <img src="<?=base_url('assets/img/user/'.$testimony_list[$key]['profile'])?>" class="img-fluid" style="margin-bottom: 0px;height:auto;margin-top: -50px;background-color: #fff;padding: 5px;border-radius: 40%;" width="100"><br>
                                                <a href="#" class="text-dark small"><?=$testimony_list[$key]['username']?></a>
                                            </div>
                                            <div class="popular-caption">
                                                <p class="text-dark"><small><?=$testimony_list[$key]['testimony_message']?></small></p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>                       

                        <!-- <div class="row justify-content-center">
                            <div class="room-btn">
                              <style media="screen">
                                .pagination
                                {
                                  display: flex;
                                  align-items: center;
                                }
                                .pagination .page-link
                                {
                                  border:0px;
                                  text-align: center;
                                  border-radius: 5px;
                                  --size: 35px;
                                  --margin: 6px;
                                  margin: 0 var(--margin);
                                  background: #202020;
                                  max-width: auto;
                                  min-width: var(--size);
                                  height: var(--size);
                                  display: flex;
                                  align-items: center;
                                  justify-content: center;
                                  cursor:pointer;
                                  padding: 0 6px;
                                  @media (hover: hover)
                                  {
                                    &:hover
                                    {
                                      background: lighten(#202020, 3%);
                                    }

                                  }
                                    &:active
                                    {
                                      background: lighten(#202020, 3%);
                                    }
                                }
                                .pagination .page-item .active
                                {
                                  color: white;
                                  background: #f81f1f;
                                }
                                .page-link
                                {
                                  text-decoration: none;
                                  color: white;
                                }
                                .page-link:hover
                                {
                                  color: red;
                                  background: #ffffff;
                                }
                              </style>
                             
                            </div>
                        </div> -->
                    <!-- </div> -->
                </div>
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

    <script src="<?=base_url('assets/js//jquery.lazyload.min.js')?>"></script>

<script type="text/javascript">
    $("img.leazyLoad2").lazyload();
    var user_id = $('#user_id').val();
    if(user_id == ''){
        user_id = 'null';
    } 
</script>
</body>
</html>
