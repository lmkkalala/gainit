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
                    <h2>Boutiques</h2>
                    <!-- <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
<?php if (!empty($shop_show_main)) { ?>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
<?php foreach ($shop_show_main as $key => $value){ ?>
                            <div class="col-md-3 col-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img" style="max-height:190px;">
                                                <a href="<?=base_url('Welcome/product/'.md5($shop_show_main[$key]['id']))?>">
                                                    <img src="<?=base_url('assets/img/cover_store/'.$shop_show_main[$key]['cover_store_image'])?>" class="img-fluid leazyLoad" alt="" style="margin-bottom: 0px;height:auto;">
                                                </a>
                                                <div class="img-cap" style="margin-bottom: 0px;">
                                                    <!-- <span><?=$shop_show[$key]['email']?></span>
                                                    <span style="margin-top:-12%;"><?=$shop_show[$key]['phone']?></span> -->
                                                    <span>
                                                        <i class="icofont-food-cart" style="font-size:20px"></i> 
                                                        <a href="<?=base_url('Welcome/product/'.md5($shop_show_main[$key]['id']))?>"> 
                                                            <?=$shop_show_main[$key]['store_name']?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <a href="<?=base_url('Welcome/product/'.md5($shop_show_main[$key]['id']))?>">
                                                    <p><?=$shop_show_main[$key]['description']?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php }?>
                        </div> 
                    </div>

                    <!-- Card two -->
                  
                </div>
            <?php }?>
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn">
                <a href="<?=base_url('Welcome/index/shop')?>" class="btn btn-danger bg-danger view-btn1">Voir Plus <i class="icofont-arrow-down" style="font-size: 15px;"></i></a>
            </div>
        </div>
    </div>
</div>
