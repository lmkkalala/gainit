<style media="screen">
  .section-padding0
  {
    padding-top: 90px;
    margin-top: -20px;

    /*padding: 30px;
        box-shadow: rgba(100, 100, 111, 0.25) 0px 7px 29px 0px;*/
  }
</style>
<div class="popular-items section-padding0">
    <div class="container-fluid">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="section-tittle mb-70 text-center">
                    <h2>Temoignages</h2>
                </div>
            </div>
        </div>
        <!-- <div class="row mb-3"> -->
            <?php if (!empty($shop_show_main)) { ?>
                <!-- Nav Card -->
                <!-- <div class="tab-content" id="nav-tabContent"> -->
                    <!-- card one -->
                    <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> -->
                        <div class="row mb-3">
                            <div class="col-md-3 col-lg-3 col-6 mb-2">
                                <div class="mx-1 w-100" style="background-color:#fff;padding: 5px; border: 1px solid #fff;border-radius: 5px;">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div style="background-color:#afafaf; height: 100px;"></div>
                                            <div style="padding: 5px;z-index: 15;">
                                                <img src="<?=base_url('assets/img/user/942b99f7c861437c9f3d3835bb9b7fd9.jpg')?>" class="img-fluid" style="margin-bottom: 0px;height:auto;margin-top: -50px;background-color: #fff;padding: 5px;border-radius: 40%;" width="100"><br>
                                                <a href="#" class="text-dark">Lucien MURHULA KALALA</a>
                                            </div>
                                            <div class="popular-caption">
                                                <p class="text-dark">Votre refuge de tout les jours.</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                <?php $i = 1; foreach ($testimony_list as $key => $value){ if ($i < 4) { ?>
                            <div class="col-md-3 col-lg-3 col-6 mb-2">
                                <div class="mx-2 w-100" style="background-color:#fff;padding: 5px; border: 1px solid #fff;border-radius: 5px;">
                                    <!--  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                                        <div class="single-popular-items mb-50 text-center">
                                            <div style="background-color:#afafaf; height: 100px;"></div>
                                            <div style="padding: 5px;z-index: 15;">
                                                <img src="<?=base_url('assets/img/user/'.$testimony_list[$key]['profile'])?>" class="img-fluid" style="margin-bottom: 0px;height:auto;margin-top: -50px;background-color: #fff;padding: 5px;border-radius: 40%;" width="100"><br>
                                                <a href="#" class="text-dark"><?=$testimony_list[$key]['username']?></a>
                                            </div>
                                            <div class="popular-caption">
                                                <p class="text-dark"><?=$testimony_list[$key]['testimony_message']?></p>
                                            </div>
                                        </div>
                                    <!-- </div>-->
                                </div> 
                            </div>
                <?php $i++; }}?>
                        </div> 
                    <!-- </div> -->

                    <!-- Card two -->
                  
                <!-- </div> -->
            <?php }?>
        <!-- </div> -->
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn">
                <a href="<?=base_url('Welcome/index/testimonies')?>" class="btn btn-danger bg-danger view-btn1">Voir Plus <i class="icofont-arrow-down" style="font-size: 15px;"></i></a>
            </div>
        </div>
    </div>
</div>
