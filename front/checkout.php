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
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/about_heros.png')?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Vérification</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================Checkout Area =================-->
        <section class="checkout_area section_padding">
          <div class="container">
            <div class="returning_customer">
              <div class="check_title">
                <h2>
                  Déjà Client?
                  <a href="#">Clicque ici pour te Connecter</a>
                </h2>
              </div>
              <p>
                Si vous avez déjà acheté chez nous, Veuillez entrer vos coordonnées dans les cases ci-dessous.
                Si vous êtes un nouveau client, Veuillez passer à la section Facturation et Expédition.
              </p>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="name" name="name" value=" " />
                  <span class="placeholder" data-placeholder="Nom d'Utilisateur ou Email"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="password" class="form-control" id="password" name="password" value="" />
                  <span class="placeholder" data-placeholder="Mot de Passe"></span>
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="btn_3">
                    Se Connecter
                  </button>

                  <a class="lost_pass" href="#">Mot de Passe oublié?</a>
                </div>
              </form>
            </div>
            <div class="cupon_area">
              <div class="check_title">
                <h2>
                  Avez-vous un coupon?
                </h2>
              </div>
              <input type="text" placeholder="Entrer le code de votre coupon" />
              <a class="tp_btn" href="#">Appliquer Coupon</a>
            </div>
            <div class="billing_details">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Détails de la Facturation</h3>
                  <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="first" name="name" />
                      <span class="placeholder" data-placeholder="Prénom"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="last" name="name" />
                      <span class="placeholder" data-placeholder="Nom"></span>
                    </div>

                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="number" name="number" />
                      <span class="placeholder" data-placeholder="Numéro de Téléphone"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="email" name="compemailany" />
                      <span class="placeholder" data-placeholder="Adresse mail"></span>
                    </div>
                    <!-- <div class="col-md-12 form-group p_star">
                      <select class="country_select">
                        <option value="1">Country</option>
                        <option value="2">Country</option>
                        <option value="4">Country</option>
                      </select>
                    </div> -->
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add1" name="add1" />
                      <span class="placeholder" data-placeholder="Votre Adresse"></span>
                    </div>
                    <!-- <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add2" name="add2" />
                      <span class="placeholder" data-placeholder="Address line 02"></span>
                    </div> -->
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="city" name="city" />
                      <span class="placeholder" data-placeholder="Ville"></span>
                    </div>
                    <!-- <div class="col-md-12 form-group p_star">
                      <select class="country_select">
                        <option value="1">Districte</option>
                        <option value="2">Ibanda</option>
                        <option value="4">District</option>
                      </select>
                    </div> -->
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                    </div>
                    <div class="col-md-12 form-group">
                      <div class="creat_account">
                        <input type="checkbox" id="f-option2" name="selector" />
                        <label for="f-option2">Créée Compte</label>
                      </div>
                    </div>
                    <div class="col-md-12 form-group">
                      <div class="creat_account">
                        <h3>Détails d'Expédition</h3>
                        <input type="checkbox" id="f-option3" name="selector" />
                        <label for="f-option3">Expédier à un autre Adresse ?</label>
                      </div>
                      <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="Notes de Commande"></textarea>
                    </div>
                  </form>
                </div>
                <div class="col-lg-4">
                  <div class="order_box">
                    <h2>Votre Commande</h2>
                    <ul class="list">
                      <li>
                        <a href="#">
                          Article
                          <span>Total</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Blackberry
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Tomatoes
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Brocoli
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="list list_2">
                      <li>
                        <a href="#">Sous-total
                          <span>$2160.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Expédition
                          <span>$50.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Total
                          <span>$2210.00</span>
                        </a>
                      </li>
                    </ul>
                    <div class="payment_item">
                      <div class="radion_btn">
                        <input type="radio" id="f-option5" name="selector" />
                        <label for="f-option5">Chèques de Paiment</label>
                        <div class="check"></div>
                      </div>
                      <p>
                        Veuillez envoyer un chèque au nom du magasin
                      </p>
                    </div>
                    <div class="payment_item active">
                      <div class="radion_btn">
                        <input type="radio" id="f-option6" name="selector" />
                        <label for="f-option6">Paypal </label>
                        <img src="img/product/single-product/card.jpg" alt="" />
                        <div class="check"></div>
                      </div>
                      <p>
                        Veuillez envoyer un chèque au nom du magasin
                      </p>
                    </div>
                    <div class="creat_account">
                      <input type="checkbox" id="f-option4" name="selector" />
                      <label for="f-option4">J'ai lu et j'accepte les</label>
                      <a href="#">termes & conditions d'utilisation*</a>
                    </div>
                    <a class="btn_3" href="#">Procéder avec Paypal</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Checkout Area =================-->
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
