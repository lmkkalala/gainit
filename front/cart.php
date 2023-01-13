<?php include("assets/includes/head.php");?>

<body>
  <!--? Preloader Start -->
  <?php include("assets/includes/include_preloader.php"); ?>
  <!-- Preloader Start -->

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
                              <h2>Panier <i class="flaticon-shopping-cart"></i> </h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding" style="margin-bottom:-20%;margin-top: -5%;">
        <div class="col-lg-12">
            <?php include("assets/includes/cart.php"); ?>
        </div>
      </section>

      <!-- Footer Start-->
      <?php include("assets/includes/method.php"); ?>
      <!-- Footer End-->
      <!--================End Cart Area =================-->
  </main>

  <!-- Footer Start-->
  <?php include("assets/includes/include_footer.php"); ?>
  <!-- Footer End-->

  <!-- Search model Begin -->
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

    <script type="text/javascript">

$('#participer').click(function(){
    var formdata = new FormData($('#cart_submit')[0]);
    $.ajax({
      url:'<?=base_url('Welcome/submit_participation_cart')?>',
      type:'POST',
      data:formdata,
      processData: false,
      contentType: false,
      dataType:'json',
      beforeSend: function(){
        $('#loader').show();
      },
      success: function(response){
        $('#loader').hide();
        if (response.status == 'success') {
          icon = 'fas fa-check';
        }else if (response.status == 'error') {
          icon = 'fas fa-info';
        }
        iziToast.show({
                      theme: 'white',
                      icon: icon,
                      timeout: 8000,
                      position: 'center',
                      message: response.info,
                      progressBarColor: 'rgb(0, 255, 184)',
        });
          setTimeout(function(argument) {
            window.location.href = '<?=base_url('Welcome/index/cart')?>';
          },5000);
      }
    });
  });

function remove_article(id){
  article_id = id;
  identifier = '#article'+article_id+'';
  $(identifier).hide();
  $.ajax({
    url:"<?=base_url('Welcome/delete_to_cart')?>",
    type:'POST',
    data:{'cart_id':article_id},
    dataType:'json',
    success: function(response){

      if (response.status == 'success') {
        icon = 'fas fa-check';
      }else if (response.status == 'error') {
        icon = 'fas fa-info';
      }
      iziToast.show({
                    theme: 'dark',
                    icon: icon,
                    timeout: 8000,
                    position: 'center',
                    message: response.info,
                    progressBarColor: 'rgb(0, 255, 184)',
      });
     setTimeout(function(){
       window.location.href = '<?=base_url('Welcome/index/cart')?>';
     },8000);
    }
  });
}
    </script>

</body>
</html>
