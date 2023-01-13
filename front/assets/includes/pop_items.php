<style media="screen">
  .section-padding0
  {
    padding: 30px;
    padding-top: 90px;
    margin-top: -20px;
    box-shadow: rgba(100, 100, 111, 0.25) 0px 7px 29px 0px;
  }
</style>
<div class="popular-items section-padding0">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-70 text-center">
                    <h2>Articles</h2>
                    <!-- <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
<?php if (!empty($products_show_arrival)) { foreach ($products_show_arrival as $key => $value){ ?>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>">
                                    <img src="<?=base_url('dist/produit/'.$products_show_arrival[$key]['caption_image'])?>" alt="<?=md5($products_show_arrival[$key]['id'])?>">
                                </a>
                                <div class="img-cap">
                                    <span onclick="add_to_cart(<?=$products_show_arrival[$key]['id']?>)">Ajouter <i class="icofont-cart"></i></span>
                                </div>
                                <!-- <div class="favorit-items" >
                                    <span class="flaticon-heart" style="color: red;"></span>
                                </div> -->
                            </div>
                            <div class="popular-caption">
                                <h3 class="display-6">
                                    <a href="<?=base_url('Welcome/product_details/'.md5($products_show_arrival[$key]['id']))?>" style="font-size:15px;"><?=$products_show_arrival[$key]['product']?></a><br>
                                    <small style="font-size: 15px; background-color: rgba(255, 0, 0, 0.8);padding: 5px;color: white;border-radius: 3px;">$ <?=$products_show_arrival[$key]['mise']?></small>
                                </h3>
                                <p style="color: #fff; font-size: 12px;padding: 5px; background-color: rgba(255, 0, 0, 0.8);width: 100px;">
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
<?php }}?>
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn">
                <a href="<?=base_url('Welcome/index/article')?>" class="btn btn-danger bg-danger view-btn1">Voir Plus <i class="icofont-arrow-down" style="font-size: 15px;"></i></a>
            </div>
        </div>
    </div>
</div>
