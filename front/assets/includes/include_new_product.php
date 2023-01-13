<style media="screen">
          .single-new-pro:hover
          {
            border: 1px solid transparent;
            padding: 10px;
            border-radius: 6px;
            box-shadow: rgba(100, 100, 111, 0.25) 0px 7px 29px 0px;
          }
          .single-new-pro:hover
          .product-img
          {
            border-radius: 3px;
          }
          .product-img
          {
            border-radius: 3px;
            box-shadow: rgba(100, 100, 111, 0.25) 0px 7px 29px 0px;
          }

        </style>
<section class="new-product-area section-padding30" style="margin-top:-10%;">
    <div class="container">
        <!-- Section tittle -->
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle mb-70">
                    <h2>Arrivages</h2>
                </div>
            </div>
        </div>
        <div class="row">
    <?php 
        if (!empty($products_show_arrival)) { 
            foreach ($products_show_arrival as $key => $value){ 
    ?>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:justify;">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                            <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>">
                                <img src="<?=base_url('dist/produit/'.$products_show_arrival[$key]['caption_image'])?>" alt="<?=md5($products_show_arrival[$key]['id'])?>">
                            </a>
                            </div>
                            <div class="product-caption">
                                <h3 class="display-6"  style="font-size: 12px!important;">
                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>"  style="font-size: 12px!important;"><?=$products_show_arrival[$key]['product']?></a>
                                </h3>
                                <span class="display-6">$ <?=$products_show_arrival[$key]['mise']?></span>
                                <div class="row">
                                <div class="col-md-6">
                                    <p class="text-white bg-secondary p-2">
                                        <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>">Details <i class="icofont-arrow-right fs-3"></i></a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-white bg-danger p-2"><a href="#" onclick="add_to_cart(<?=$products_show_arrival[$key]['id']?>)">Ajouter <i class="icofont-cart"></i></a></p>
                                </div>
                                </div>
                                <!-- <div style="word-break: break-all;height: 150px; overflow-y: auto;">
                                    <p><?=$products_show_arrival[$key]['description']?></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
         }
     }
         ?>
        </div>
    </div>
</section>
