<?php include("assets/includes/head.php");?>
<body>
  <!--? Preloader Start -->
  <?php //include("assets/includes/include_preloader.php"); ?>
  <!-- Preloader Start -->

<?php if (isset($info)){ ?> 
        <!-- <div class="position-absolute fixed-top w-25 mt-2" style="margin-left:75%;">
            <div class="alert bg-warning">
                <button class="close" data-dismiss="alert">&times;</button>
                <strong class="text-white me-2"></strong> <?=$info?>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    <script type="text/javascript">
        iziToast.show({
                    theme: 'white',
                    icon: 'fas fa-exclamation-triangle',
                    timeout: 8000,
                    position: 'topRight',
                    message: "<?=$info?>",
                    progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>  
    <?php }?>

    <?php if ($this->session->message != null): ?>
   <script type="text/javascript">
         iziToast.show({
                    theme: 'white',
                    icon: 'fas fa-info',
                    timeout: 8000,
                    position: 'topRight',
                    message: '<?=$this->session->message?>',
                    progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>  
<?php
    $this->session->sess_destroy($this->session->message);
 endif;
?>  
                </div>
            </div>
        </div>
  <!-- Header Start -->
  <?php include("assets/includes/include_header.php"); ?>
  <!-- Header End -->
  
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/download.jfif')?>');background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Se connecter</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding" style="margin-top:-15%; margin-bottom:-15%;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3 class="text-center">Bienvenu à la Platform des chançard<br>
                                    <small>Veuillez vous connecter maintenant!</small></h3>
                                <form class="row contact_form" action="<?=base_url('Login/index/1')?>" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Address mail" required="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Mot de passe" required="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector" required="">
                                            <label for="f-option">Se souvenir de moi.</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            <i  class="spinner-grow" role="status"></i>Connection
                                        </button>
                                        <a class="lost_pass" href="#"data-toggle="modal" data-target="#forgotpass" data-id="">Mot de passe oublier.</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top:3%;margin-bottom: 2%;">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                    <h2>Vous n'avez pas de compte?</h2>
                                    <p>Cliquer ci-dessous pour avoir un compte.</p>
                                    <a href="<?=site_url('Welcome/index/signup')?>" class="btn_3">Creer Compte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div class="modal fade" id="forgotpass">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center;">Mot de pass oublier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button><br>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="padding:10px;text-align: center;">
                        <div class="col-8">
                            <h5 style="color: black;" class="h6">Suiver le procedurer pour pouvoir modifier votre mot de passe </h5>
                        </div>
                        <div class="col-4">
                            <button type="type" class="btn btn-primary p-3" onclick="send()">Retour</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form id="passwordmodifier">
                                <div class="row d-flex justify-content-center" id="new_content">
                                    <div class="col-12 mt-2">
                                        <input type="email" id="email" class="form-control w-100" name="email" placeholder="Saisissez votre adress mail">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                         <button type="submit" id="valider" class="btn btn-primary w-100 mt-2">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
      </div>
</div>
        <!--================login_part end =================-->
    </main>
    <!-- JS here -->

    <script src="<?=base_url('assets/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?=base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
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

    <script type="text/javascript">
        function send(value = null) {
            var data = new FormData($('#passwordmodifier')[0]);
            if (value == null) {
                var link = '<?=base_url('Login/forgotpass')?>';
                var dataType = '';
            }else if(value == 'srtc'){
                var link = '<?=base_url('Login/forgotpass/srtc')?>';
                var dataType = '';
            }else if(value == 'change'){
                var link = '<?=base_url('Login/forgotpass/change')?>';
                var dataType = '';
            }else if (value == 'check') {
                var link = '<?=base_url('Login/forgotpass/check')?>';
                var dataType = '';
            }
            $.ajax({
                url:link,
                type:'POST',
                data:data,
                dataType:dataType,
                processData: false,
                contentType: false,
                beforeSend: function(){
                    $('button').prop('disabled',true);
                },
                success: function(response){
                    $('button').prop('disabled',false);
                    if (dataType == '') {
                        $('#new_content').html('');
                        $('#new_content').html(response);
                    }else{
                        $('#new_content').modal('hide');
                    }
                }
            });
        }

        $(document).on('submit','form#passwordmodifier',function (event) {
           event.preventDefault();
           send('srtc');
           event.stopImmediatePropagation();
           return;
        });
    </script>

</body>
</html>