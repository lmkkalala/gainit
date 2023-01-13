<?php include("assets/includes/head.php");?>

<?php if ($this->session->c_message != '' or $this->session->c_message != null): ?>
   <script type="text/javascript">
        iziToast.show({
                    theme: 'dark',
                    icon: 'fas fa-info',
                    timeout: 8000,
                    position: 'topRight',
                    message: '<?=$this->session->c_message?>',
                    progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>  
<?php endif; $this->session->c_message = '';?>

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
                                <h2>Articles</h2>
                                <h3 id="shop"><?=$store?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding" style="margin-top:-10%;">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Arrivages</a>
                                <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Par Prix</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Plus Populaire</a> -->
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view"></div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-items">
                                <select name="select" class="form-control" id="select1" onchange="category_loader(value);">
                                    <option value="categorie"><?=$current_category?></option>
                                    <?php foreach ($category_show_all as $key => $value) : ?>
                                        <option value="<?=$category_show_all[$key]['categorie']?>"><?=$category_show_all[$key]['categorie']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <input type="hidden" id="user_id" value="<?=$user_id?>" name="">
                        <div class="row">
                            <div class="col-md-12 col-6" id="loader_image" style="display:none;margin-top: -10%;align-content: center;">
                                <img src="<?=base_url('assets/img/loading.gif')?>" style="margin-left: 50%;margin-top: 10%; width: 50px;" class="img-fluid">
                            </div>
                        </div>
                        <div class="row" id="articles">
                            <img class="leazyLoad2" src="" alt="" style="display: none;">
<?php 
    if (!empty($shop_products_show)) { 
        // show the product that are fund in a shop of a seller
        foreach ($shop_products_show as $key => $value) { 
?>
                            <!-- <div class="col-md-3 col-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img">
                                                <img class="leazyLoad1" src="<?=base_url('dist/produit/'.$shop_products_show[$key]['caption_image'])?>" alt="">
                                                <div class="img-cap">
                                                    <span onclick="add_to_cart(<?=$shop_products_show[$key]['id']?>)">Add to cart <i class="icofont-cart"></i></span>
                                                </div>
                                                <div class="favorit-items">
                                                    <span class="flaticon-heart" id="like_button<?=$shop_products_show[$key]['id']?>"  onclick="like_button(<?=$shop_products_show[$key]['id']?>)" style="color:rgba(255, 0, 0, 0.8);"></span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <h3 class="display-6">
                                                    <a href="<?=base_url('Welcome/product_details/'.md5($shop_products_show[$key]['id']))?>" style="font-size: 16px;"><?=$shop_products_show[$key]['product']?></a>
                                                    <small style="font-size: 15px; background-color: rgba(255, 0, 0, 0.8);padding: 5px;color: white;border-radius: 5px;font-size: 16px;">$ <?=$shop_products_show[$key]['mise']?></small>
                                                </h3>
                                                <table style="font-size:12px;">
                                                    <tr>
                                                        <th>Personnes Enregistre</th> <td id="number_person">20</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombres Likes</th> <td id="number_reaction">20</td>
                                                    </tr>
                                                </table>
                                                <p style="color: #fff; font-size: 15px;padding: 5px; background-color: rgba(255, 0, 0, 0.8);width: 100px;">
                                                    <a href="<?=base_url('Welcome/product_details/'.md5($shop_products_show[$key]['id']))?>">Details <i class="icofont-arrow-right fs-3"></i></a>
                                                </p>

                                                 <div style="word-break: break-all; height: 150px; overflow-y: auto;">
                                                     <p><?=$shop_products_show[$key]['description']?></p>
                                                 </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
<?php 
    }
}else{ 
    if(!empty($products_show_all)){ 
        // show all product that are in the data base
        foreach ($products_show_all as $key => $value){ 
?>
                            <!-- <div class="col-md-3 col-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img">
                                                <img class="leazyLoad2" src="<?=base_url('dist/produit/'.$products_show_all[$key]['caption_image'])?>" alt="" style="background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="img-cap">
                                                    <span onclick="add_to_cart(<?=$products_show_all[$key]['id']?>)">Add to cart <i class="icofont-cart"></i></span>
                                                </div>
                                                <div class="favorit-items">
                                                    <span class="flaticon-heart" id="like_button<?=$products_show_all[$key]['id']?>" onclick="like_button(<?=$products_show_all[$key]['id']?>)" style="color:rgba(255, 0, 0, 0.8);"></span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <h3 class="display-5">
                                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_all[$key]['id']))?>" style="font-size: 16px;"><?=$products_show_all[$key]['product']?></a> 
                                                    <small style="font-size: 15px; background-color: rgba(255, 0, 0, 0.8);padding: 5px;color: white;border-radius: 5px;">$ <?=$products_show_all[$key]['mise']?></small>
                                                </h3>
                                                <table style="font-size:12px;">
                                                    <tr>
                                                        <th>Personnes Enregistre</th> <td id="number_person">20</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombres Likes</th> <td id="number_reaction">20</td>
                                                    </tr>
                                                </table>
                                                <p style="color: #fff; font-size: 15px;padding: 5px; background-color: rgba(255, 0, 0, 0.8);width: 100px;">
                                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_all[$key]['id']))?>">Details <i class="icofont-arrow-right fs-3"></i></a>
                                                </p>
                                                 <div style="word-break: break-all; height: 150px; overflow-y: auto;">
                                                     <p><?=$products_show_all[$key]['description']?></p>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
<?php 
        } 
    } 
} 
?>
                        </div>
                        <div class="row justify-content-center">
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
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->

        <!-- Shop Method End-->
    </main>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?=base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <div style="margin-top:10%;"></div>
    <!-- Footer Start-->
    <?php include("assets/includes/include_footer.php"); ?>
    <!-- Footer End-->
    <!--? Search model Begin -->
    <!-- <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div> -->
    <!-- Search model end -->

<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?=base_url('assets/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    
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
    //$("img.leazyLoad1").lazyload();
    $("img.leazyLoad2").lazyload();
    var user_id = $('#user_id').val();
    if(user_id == ''){
        user_id = 'null';
    } 
    
    function category_loader(value,user_id = null){
        $.ajax({
            url:'<?=base_url('Welcome/categorised_article/')?>'+value+'/'+user_id,
            type:'POST',
            beforeSend: function(){
                $('#articles').html('');
                $('#loader_image').css('display','block');
            },
            success: function(result){
                $('#loader_image').css('display','none');
                //$('#shop').html('');
                $('#articles').html(result);
            }
        });
    }

    setTimeout(function(){
         category_loader('categorie',user_id);
    },500);

   function add_to_cart(id){
    product_id = id
    $.ajax({
        url:'<?=base_url('Welcome/add_to_cart')?>',
        type:'PoST',
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
    })
   }

   function like_button(product_id){
        $.ajax({
        url:'<?=base_url('Welcome/like_button')?>',
        type:'POST',
        data:{product_id:product_id},
        dataType:'json',
        success: function(response){
            if(response.reaction == '1'){
                color = 'text-info';
            }else if (response.reaction == '0') {
                color = '';
            }else{
                color = '';
            }

            if (response.status == 'success') {
               $('#like_button'+product_id).attr('class','flaticon-heart '+color+'');
               $('#number_reaction'+product_id).html(response.reaction_value);
            }else if (response.status == 'fail') {
                // do nothing just keep the value you have
            }else if (response.status == 'no_user') {
                icon = 'fas fa-exclamation-triangle';
                iziToast.show({
                    theme: 'white',
                    icon: icon,
                    timeout: 8000,
                    position: 'topRight',
                    message: 'Vous devez avoir un compte d\'utilisateur pour aimer un article. <a href="<?=site_url('Welcome/index/login')?>">Cliquer Ici.</a>',
                    progressBarColor: 'rgb(0, 255, 184)',
                });
            }
        }
    })
   }
</script>
</body>
</html>
