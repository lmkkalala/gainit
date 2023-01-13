<?php include("assets/includes/head.php");?>

<body>
  <!--? Preloader Start -->
  <?php //include("assets/includes/include_preloader.php"); ?>
  <!-- Preloader Start -->

  <!-- Header Start -->
  <?php include("assets/includes/include_header.php"); ?>
  <!-- Header End -->

    <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <!-- <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/about_hero.png')?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 style="color:#000;">Mon Profil</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!--? Hero Area End-->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <style media="screen">
                body {
                      color: #797979;
                      background: #f1f2f7;
                      font-family: 'Open Sans', sans-serif;
                      padding: 0px !important;
                      margin: 0px !important;
                      font-size: 13px;
                      text-rendering: optimizeLegibility;
                      -webkit-font-smoothing: antialiased;
                      -moz-font-smoothing: antialiased;
                    }

                    .profile-nav, .profile-info{
                      margin-top:1px;
                    }

                    .profile-nav .user-heading {
                      background: #fbc02d;
                      color: #fff;
                      border-radius: 4px 4px 0 0;
                      -webkit-border-radius: 4px 4px 0 0;
                      padding: 30px;
                      text-align: center;
                    }

                    .profile-nav .user-heading.round a  {
                      border-radius: 50%;
                      -webkit-border-radius: 50%;
                      border: 10px solid rgba(255,255,255,0.3);
                      display: inline-block;
                    }

                    .profile-nav .user-heading a img {
                      width: 112px;
                      height: 112px;
                      border-radius: 50%;
                      -webkit-border-radius: 50%;
                    }

                    .profile-nav .user-heading h1 {
                      font-size: 22px;
                      font-weight: 300;
                      margin-bottom: 5px;
                    }

                    .profile-nav .user-heading p {
                      font-size: 12px;
                    }

                    .profile-nav ul {
                      margin-top: 1px;
                      display: block;
                    }

                    .profile-nav ul > li {
                      border-bottom: 1px solid #ebeae6;
                      margin-top: 0;
                      line-height: 30px;
                    }

                    .profile-nav ul > li:last-child {
                      border-bottom: none;
                    }

                    .profile-nav ul > li > a {
                      border-radius: 0;
                      -webkit-border-radius: 0;
                      color: #89817f;
                      border-left: 5px solid #fff;
                    }

                    .profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
                      background: #f8f7f5 !important;
                      border-left: 5px solid #fbc02d;
                      color: #89817f !important;
                    }

                    .profile-nav ul > li:last-child > a:last-child {
                      border-radius: 0 0 4px 4px;
                      -webkit-border-radius: 0 0 4px 4px;
                    }

                    .profile-nav ul > li > a > i{
                      font-size: 16px;
                      padding-right: 10px;
                      color: #bcb3aa;
                    }

                    .profile-info .panel-footer {
                      background-color:#f8f7f5 ;
                      border-top: 1px solid #e7ebee;
                    }

                    .profile-info .panel-footer ul li a {
                      color: #7a7a7a;
                    }

                    .bio-graph-heading {
                      background: #fbc02d;
                      color: #fff;
                      text-align: center;
                      padding: 40px 110px;
                      border-radius: 4px 4px 0 0;
                      -webkit-border-radius: 4px 4px 0 0;
                      font-size: 16px;
                      font-weight: 300;
                    }

                    .bio-graph-info {
                      color: #89817e;
                      padding: 15px;
                    }

                    .bio-graph-info h1 {
                      font-size: 20px;
                      font-weight: 300;
                      margin: 0 0 20px;
                      color: red;
                    }

                    .bio-row {
                      width: 40%;
                      float: left;
                      margin-bottom: 10px;
                      padding:0 15px;
                    }

                    .bio-row p span {
                      width: 100px;
                      display: inline-block;
                    }

                </style>

                  <div class="container bootstrap snippets bootdey">
                    <div class="row">
                      <?php include("assets/includes/sidebar.php"); ?>
                      <div class="profile-info col-md-9">
                          <?php if(isset($_GET['profil'])){include("profil.php");} ?>
                          <?php if(isset($_GET['modifier_profil'])){include("modifier_profil.php");} ?>
                          <?php if(isset($_GET['commandes'])){include("commandes.php");} ?>
                          <?php if(isset($_GET['supprimer_compte'])){include("supprimer_compte.php");} ?>
                          <div></div>
                      </div>
                    </div>
                  </div>
<?php if(isset($_GET['commandes'])){ ?>
<div class="row mt-2">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row mx-1">
            <div class="col-md-6 d-flex justify-content-start mb-2">
              <h4>Article dont le tirage est aujourd'hui.</h4>
            </div>
          </div><hr>
           <div class="row mt-2" style="height:400px; overflow-y: auto;" id="list_todays_tirage">
              <div class="col-md-3">
               <div class="row d-flex justify-content-center">
                   <img src="<?=base_url('assets/img/loading.gif')?>" style="width: 50%;border-radius: 50%;">
                </div>
              </div>
           </div>                 
      </div>
    </div>
  </div>
</div>
<div class="row mt-2">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row mx-1">
            <div class="col-md-6 d-flex justify-content-start mb-2">
              <h5 class="text-dark mt-2 w-100">LISTE DES GAGNANTS</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <input type="text" class="form-control w-100" placeholder="Recherchez" name="" id="search_particular">
            </div>
          </div><hr>
           <div class="row mt-2" style="height:500px; overflow-y: auto;" id="winner_list">
             <div class="col-md-3 mt-2">
               <!-- <div class="card-body" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.4);padding: 15px;">
                 <div class="row d-flex justify-content-center">
                   <img src="<?=base_url('assets/img/user/'.$this->session->profile)?>" style="width: 50%;border-radius: 50%;">
                 </div>
                 <div class="row mt-1">
                   <div class="col-md-12">
                     <div style="text-align: center;">
                       <span style="font-size: 11px;color:#000;">Elvis Ansima</span>
                       <hr>
                       <ul>
                         <li><span style="font-size: 11px;color:#000;">Article <span>Samsung</span></span></li>
                         <li><span style="font-size: 11px;color:#000;">Vendeur <span>Murhula kalala lucien</span></span></li>
                       </ul>
                      </div>
                   </div>
                 </div>
               </div> -->
               <div class="row d-flex justify-content-center">
                   <img src="<?=base_url('assets/img/loading.gif')?>" style="width: 50%;border-radius: 50%;">
                </div>
             </div>
           </div>                 
      </div>
    </div>
  </div>
</div>
<?php }?>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- ================ contact section end ================= -->
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

    
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#product_tirage').DataTable();

   function content_load(){
    $.ajax({
      url:'<?=base_url('Welcome/load_winners')?>',
      type:'GET',
      success: function(result){
        $('#winner_list').html('');
        $('#winner_list').html(result);
      }
    });

    $.ajax({
      url:'<?=base_url('Welcome/load_todays_tirage')?>',
      type:'GET',
      success: function(result){
        $('#list_todays_tirage').html('');
        $('#list_todays_tirage').html(result);
      }
    });
   }
content_load();
setInterval(content_load(),20000);

    $('#search_particular').on('input',function(){
      var search_particular = $('#search_particular').val();
      $.ajax({
        url:'<?=base_url('Welcome/load_winners/')?>'+search_particular,
        type:'GET',
        success: function(result){
          $('#winner_list').html('');
          $('#winner_list').html(result);
        }
      });
    });

    $('#delete_account_client').click(function (event) {
       event.preventDefault();
        iziToast.show({
            theme: 'dark',
            icon: 'exclamation-triangle',
            title: 'Supprimer',
            message: 'Voulez-vous vraiment supprimer votre compte?',
            position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
                ['<button>Ok</button>', function (instance, toast) {
                    window.location.href = '<?=base_url('Client/delete_client')?>';
                }, true], // true to focus
                ['<button>Close</button>', function (instance, toast) {
                    instance.hide({
                        transitionOut: 'fadeOutUp',
                        onClosing: function(instance, toast, closedBy){
                            console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                        }
                    }, toast, 'buttonName');
                }]
            ],
            onOpening: function(instance, toast){
                console.info('callback abriu!');
            },
            onClosing: function(instance, toast, closedBy){
                console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
            }
        });
   });
});
</script>

</body>

</html>
