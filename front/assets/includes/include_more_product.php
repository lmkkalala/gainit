<section class="new-product-area section-padding30">
    <div class="container">

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
        <div class="row">
<?php 
if (!empty($products_show_arrival)) {
 foreach ($products_show_arrival as $key => $value){ 
?>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                            <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>">
                                <img src="<?=base_url('dist/produit/'.$products_show_arrival[$key]['caption_image'])?>" alt="">
                            </a>
                            </div>
                            <div class="product-caption">
                                <h3 class="display-6" style="font-size: 12px!important;">
                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>" style="font-size: 12px!important;"><?=$products_show_arrival[$key]['product']?></a>
                                </h3>
                                <span>$ <?=$products_show_arrival[$key]['mise']?></span>
                                <p>
                                    <a href="#" onclick="add_to_cart(<?=$products_show_arrival[$key]['id']?>)" style="color: rgba(0, 0, 0, 0.8);">Ajouter <i class="icofont-cart"></i></a>
                                </p>
                                <p style="color: #fff; font-size: 15px;padding: 5px; background-color: rgba(0, 0, 0, 0.8);width: 100px;">
                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>">Details <i class="icofont-arrow-right fs-3"></i></a>
                                </p>
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
