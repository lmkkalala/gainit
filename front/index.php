    <?php include("assets/includes/head.php");?>
<body>
    <!--? Preloader Start -->
    <?php include("assets/includes/include_preloader.php"); ?>
    <!-- Preloader Start -->
    <!-- Header Start -->
    <?php include("assets/includes/include_header.php"); ?>
    <!-- Header End -->
    <main>
        <!-- slider Area Start -->
        <?php include("assets/includes/include_slider.php"); ?>
        <!-- slider Area End-->

        <!--  New Product Start -->
        <?php include("assets/includes/include_new_product.php"); ?>
        <!--  New Product End -->

        <!-- Popular Items Start -->
        <?php include("assets/includes/pop_items.php"); ?>
        <!-- Popular Items End -->

        <!--? Choice_slide Start-->

        <!-- Choice_slide End-->
        <br>
        <!--? Shop Method Start-->
        <?php include("assets/includes/method.php"); ?>
        <!-- Shop Method End-->

         <!--  New Product Start -->
        <?php include("assets/includes/our_store.php"); ?>
        <!--  New Product End -->
         <!--  New Product Start -->
        <?php include("assets/includes/our_testimonies.php"); ?>
        <!--  New Product End -->
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
    $(window).on('load', function() {
        var delayMs = 1500; // delay in milliseconds
    
        setTimeout(function(){
            $('#myModal').modal('show');
        }, delayMs);
        function testimony_display(){
            $('#testimony').modal('show');
        }
        setTimeout(testimony_display(), 3000);
        setInterval(testimony_display(), 10000);
    });

    function add_to_cart(id){
        product_id = id
        $.ajax({
            url:'<?=base_url('Welcome/add_to_cart')?>',
            type:'POST',
            data:{product_id:product_id},
            dataType:'json',
            success: function(response){
                var icon = '';
                if (response.status == 'warning') {
                    icon = 'fas fa-exclamation-triangle';
                }else if (response.status == 'error') {
                    icon = 'fas fa-times';
                }else if (response.status == 'success') {
                    icon = 'fas fa-check';
                }

                iziToast.show({
                        theme: 'white',
                        icon: icon,
                        timeout: 8000,
                        position: 'topRight',
                        message: response.info,
                        progressBarColor: 'rgb(0, 255, 184)',
                });
            }
        });
    }
</script>

<?php if (!isset($this->session->names)): ?>
<div class="modal fade" id="myModal">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    
                </div> -->
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button><br>
                    <div class="row" style="padding:10px;text-align: center;">
                        <div class="col-md-6">
                            <h5 style="color: black;">Faites parti de notre communauté des chançards  Avez-vous déjà un compte ?</h5>
                            <!-- <span>Vous avez un compte?</span>
                            <span>Vous n'avez pas un compte?</span> -->
                            <a href="<?=site_url('Welcome/index/login')?>" style="color:white;background-color: rgba(0, 0, 0, 0.7); padding: 10px;font-size: 12px;width: 100%;border-radius: 5px;">Connexion</a>
                            <a href="<?=site_url('Welcome/index/signup')?>" style="color:white;background-color: rgba(0, 0, 0, 0.7); padding: 10px;font-size: 12px;;width: 100%;border-radius: 5px;">Inscription</a>
                        </div>
                        <div class="col-md-6 mt-2">
                           <img src="<?=base_url('assets/img/loginLoader.jpeg')?>" class="img-fluid">
                           <!-- <div class="mt-1">
                               <h3>TIRAGE!</h3>
                           </div> -->
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>
<?php endif; ?>

<?php if($this->session->usertype == 'seller' and !empty($this->session->other_usertype)) { ?>
<!-- echo a modul here to switch the account to the client session -->
<div class="modal fade" id="myModal">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    
                </div> -->
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button><br>
                    <div class="row" style="padding:10px;text-align: center;">
                        <div class="col-md-12">
                            <h5 style="color: black;">Connecter vous entant que client en cliquant ci-dessous.</h5>
                            <a href="<?=base_url('Welcome/connect_as_/seller')?>" class="btn btn-success">Connecter</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>
<?php
    }else{
?>
<!-- do some thing else here  -->
<?php } ?>

<?php
    if ($this->session->usertype == 'admin' and !empty($this->session->other_usertype)) {
?>
<div class="modal fade" id="myModal">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    
                </div> -->
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button><br>
                    <div class="row" style="padding:10px;text-align: center;">
                        <div class="col-md-12">
                            <h5 style="color: black;">Connecter vous entant que client en cliquant ci-dessous.</h5>
                            <a href="<?=base_url('Welcome/connect_as_/admin')?>" class="btn btn-success">Connecter</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>
<!-- echo a modul here to switch the account to the client session -->
<?php
    }else{
?>
<!-- do some thing else here  -->
<?php } ?>

</body>
</html>
