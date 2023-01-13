<?php include("assets/includes/head.php");?>

<body>
      <style media="screen">
                          .radio
                          {
                            background: #454857;
                            padding: 4px;
                            border-radius: 3px;
                            box-shadow: inset 0 0 0 3px rgba(35, 33, 45, 0.3), 0 0 0 3px rgba(185, 185, 185, 0.3);
                            position: relative;
                            margin-bottom: 10px;
                          }
                          .radio input
                          {
                            width: auto;
                            height: 100%;
                            appearance: none;
                            outline: none;
                            cursor: pointer;
                            border-radius: 2px;
                            padding: 4px 8px;
                            background: #454857;
                            color: #bdbdbdbd;
                            font-size: 14px;
                            font-family: times;
                            transition: all 100ms linear;
                          }
                          .radio input:checked
                          {
                            background-image: linear-gradient(180deg, #95d891, #74bbad);
                            color: #fff;
                            box-shadow: 0 1px 1px #0000002e;
                            text-shadow: 0 1px 0px #79485f7a;
                          }
                          .radio input:before
                          {
                            content: attr(label);
                            display: inline-block;
                            text-align: center;
                            width: 100%;
                          }
              </style>
  <!-- Header Start -->
  <?php include("assets/includes/include_header.php"); ?>
  <!-- Header End -->
  <?php foreach($product as $key => $value): ?>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image:url('<?=base_url('assets/img/hero/download.jfif')?>');background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Détails</h2>
                                <h3 style="color:white;font-family:times;font-weight:200px;"> <?=$product[$key]['product']?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="mt-4 mb-5">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom:20px;">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                      $count = 0;
                      while($count < 3){
                        if ($count == 0) {
                            $active = 'active';
                        }else{
                            $active = '';
                        }
                    ?>
                          <div class="carousel-item <?=$active?>">
                                <div class="single_product_img">
                                    <img src="<?=base_url('dist/produit/'.$product[$key]['caption_image'])?>" alt="#" class="img-fluid d-block w-100">
                                </div>
                          </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                    <?php 
                        $count ++; 
                      }
                    ?>
                    </div>
                  </div>
                  <div class="justify-content-center mt-4">
                    <p>Participer et Soit le gagnant de cette arcticle.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="col-xs-4 single_product_text text-center" style="margin-top: 0px;box-shadow: rgba(100, 100, 111, 0.25) 0px 7px 29px 0px;padding:40px;">
                      <h4 style="box-shadow:rgba(100, 100, 111, 0.15) 0px 7px 29px 0px;padding:10px;border-radius:5px;">PRODUIT <br>
                          <?=$product[$key]['product']?></h4>
                          <div style="max-height: 250px; overflow-y: auto; height: auto;">
                            <p style="font-size:13px;"><?=$product[$key]['description']?></p>
                          </div>
                      

                      <div class="card_area">
                        <form class="form-horizontal"  method="post" style="align-items:center;">
                          <div class="form-group" style="margin-top:-40px;">
                            <span id="id_product" style="display:none;"><?=$product[$key]['id']?></span>
                            <!-- <label for="" class="col-md-4 conrtol-label">Produit</label>
                            <div class="col-lg-8 d-inline-block mt-2" style="font-size:12px;width:200px;">
                                <input class="form-control" style="border: none;background-color: white;width: 200px;" type="text" value="<?=$product[$key]['product']?>" disabled>
                            </div> -->
                            <!-- <label for="" class="col-md-4 conrtol-label">Quantité En stock</label>
                            <div class="col-lg-8 d-inline-block mt-2" style="font-size:12px;width:200px;">
                                <input class="form-control" style="border: none;background-color: white;" type="text" value="1" disabled>
                            </div> -->
                            <label for="" class="col-md-4 conrtol-label" style="text-decoration: underline;">Mise</label>
                            <div class="col-lg-8 d-inline-block mt-2" style="font-size:12px;width:200px;">
                                <input class="form-control" style="border: none;background-color: white;" type="text" value="<?=$product[$key]['mise']?> $" disabled>
                            </div>
                            <label for="" class="col-md-4 conrtol-label" style="text-decoration: underline;">Participants</label>
                            <div class="col-lg-8 d-inline-block mt-2" style="font-size:12px;width:200px;">
                                <input class="form-control" style="border: none;background-color: white;" type="text" value="<?=$product[$key]['participant']?>" disabled>
                            </div>
                          </div>
                        </form>
                        <div class="add_to_cart">
                        <?php 
                            if ($this->session->identifier == null): 
                                $this->session->message = 'Pour effectuer un achat veuiller vous inscrirer ou vous identifier';
                        ?>
                            <a href="<?=base_url('Welcome/index/login')?>" class="btn btn-primary btn_3 mt-2"><i class="fa fa-shopping-cart"></i> Ajouté</a>
                            <a href="<?=base_url('Welcome/index/login')?>" class="btn btn-success btn_3 mt-2"><i class="fa fa-trophy"></i> Participé</a>
                        <?php 
                            elseif($this->session->identifier != null): 
                        ?>

                        <?php 
                                if ($product[$key]['sellValidate'] == '0' and date('Y-m-d',time()) <= $product[$key]['end_date']) {
                                    $text = ' Participé';
                                    $disabled = '';
                                }else{
                                    $text = ' Conclu';
                                    $disabled = 'disabled';
                                }
                            ?>
                            <button type="button" class="btn btn-primary btn_3 mt-2" onclick="add_to_cart(<?=$product[$key]['id']?>)"  <?=$disabled?>><i class="fa fa-shopping-cart"></i> Ajouté</button>
                            
                            <button type="button" class="btn btn-success btn_3 mt-2" data-toggle="modal" data-target="#participer" data-id="<?=$product[$key]['id']?>" <?=$disabled?>><i class="fa fa-trophy"></i><?=$text?> </button>
                        <?php endif;?>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

<!-- Modal for participating to a bet -->

<div class="modal fade" id="participer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Participer et Gagner.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="submit_participation_form">
            <div class="col-md-12">
               <div class="row">
                    <input type="hidden" class="form-control" placeholder="" value="" id="product_id" name="product_id">
                    <input type="hidden" class="form-control" placeholder="" value="" id="seller_id" name="seller_id">
                    <input type="hidden" class="form-control" placeholder="" value="<?=$this->session->identifier?>" id="client_id" name="client_id">
                    <div class="col-md-6 mt-1">
                        <label>Date debout</label>
                       <input type="text" class="form-control" placeholder="debout" value="" id="start_date" name="start_date">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Date fin</label>
                       <input type="text" class="form-control" placeholder="fin" value="" id="end_date" name="end_date">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Noms</label>
                       <input type="text" class="form-control" placeholder="Noms" value="<?=$this->session->names?>" name="names">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Email</label>
                       <input type="text" class="form-control" placeholder="Email" value="<?=$this->session->email?>" name="email">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Address</label>
                       <input type="text" class="form-control" placeholder="Address" value="<?=$this->session->address?>" name="address">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Telephone</label>
                       <input type="text" class="form-control" placeholder="Telephone" value="<?=$this->session->phone?>" name="phone">
                   </div>
                   <!-- <div class="col-md-6 mt-1">
                        <label>Methode de payement</label>
                       <select class="form-control w-100">
                            <option value="">Selectionner ici</option>
                            <option>Airtel Money</option>
                            <option>Orange Money</option>
                            <option>M-pesa</option>
                        </select>
                   </div> -->
                   <div class="col-md-6 mt-1">
                        <label>Produit</label>
                        <input type="text" class="form-control" placeholder="Produit" value="" id="article" name="article">
                   </div>
                   <div class="col-md-6 mt-1">
                        <label>Mise</label>
                        <input type="text" class="form-control" placeholder="Mise" value="" id="mise" name="mise">
                   </div>
               </div>
                <div class="row justify-content-left mt-2">
                    <div class="col-md-6 mt-2">
                        <button type="button" style="padding:15px;" class="btn btn-secondary btn-sm shadow-none w-100" data-dismiss="modal">Fermer</button>
                    </div>
                    <div class="col-md-6 mt-2">
                        <button type="submit" style="padding:15px;" class="btn btn-primary shadow-none w-100" id="submit_participation"><img src="<?=base_url('assets/img/loading.gif')?>" style="display: none;" height="20" width="20" id="loading"> Envoyer</button>
                    </div>
                </div> 
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card_area">
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mt-2">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Personne Enregistre <span id="number_client">0</span> /  <?=$product[$key]['participant']?>
                                    <button class="btn btn-secondary p-4 h6 text-white shadow-none" onclick="number_client_function()">
                                        <img src="<?=base_url('assets/img/loading.gif')?>" style="display: none;" height="30" width="30" id="loader">Actualiser
                                    </button>
                                </p>
                            </div>
    <style type="text/css">
        .chart {
          border: 1px solid royalblue;
        }
    </style>
                            <div class="d-none d-sm-block card-body">
                                <div>
                                    <div class="chart">
                                        <canvas id="myChart" width="400" height="200"></canvas>
                                    </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!--================End Single Product Area =================-->
        <!--? Shop Method Start-->
        <?php include("assets/includes/method.php"); ?>
        <!-- Shop Method End-->

        <!-- See more Articles start -->
        <?php include("assets/includes/include_more_product.php"); ?>
        <!-- See more Articles end -->

    </main>
<?php endforeach; ?>
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

    <!-- JS here -->

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
    <script src="<?=base_url('assets/js/redirect.js')?>"></script>

<script type="text/javascript">
$('#participer').on('show.bs.modal', function (e) {
    var product_id = $(e.relatedTarget).data('id');
    $.ajax({
        url:'<?=base_url('Welcome/load_product/')?>'+product_id,
        type:'POST',
        dataType:'json',
        success:function (result) {
            $('#article').val(result[0].product);
            $('#mise').val(result[0].mise);
            $('#start_date').val(result[0].start_date);
            $('#end_date').val(result[0].end_date);
            $('#product_id').val(result[0].id);
            $('#seller_id').val(result[0].user_id);
        }
    });
});

function alert(icon,result){
    iziToast.show({
                    theme: 'white',
                    icon: icon,
                    timeout: 8000,
                    position: 'topRight',
                    message: result,
                    progressBarColor: 'rgb(0, 255, 184)',
            });
}

$(document).on('submit','form#submit_participation_form',function(event) {
    event.preventDefault();
    var data = new FormData(this);
    $.ajax({
        url:'<?=base_url('Welcome/submit_participation')?>',
        type:'POST',
        data:data,
        dataType:'json',
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('#loading').show();
        },
        success:function (result) {
            if(result.temp_id != ''){
                //redirect to maishapay api
url_maishapay = 'https://sandbox1.maishapay.net/checkout/index.php';

apiOption = '145.14.151.37';

apikey = 'urn:maishapay:f82c68227223e25975d5f6ebdd9dcc3819a9cc91';

gateway_mode = 1;

montant = $('#mise').val();

monnaie = 'USD';

payment_description = $('#article').val();

logo_url = '<?=base_url("assets/img/loginLoader.jpeg")?>';

page_callback_success = '<?=base_url("welcome/api_pay_back/success/")?>'+result.temp_id;

page_callback_failure = '<?=base_url("welcome/api_pay_back/failure/")?>'+result.temp_id;

page_callback_cancel = '<?=base_url("welcome/api_pay_back/cancel/")?>'+result.temp_id;
$.redirect(url_maishapay, {'apiOption': apiOption, 'apikey': apikey, 'gateway_mode': gateway_mode, 'montant': montant, 'monnaie' : monnaie , 'payment_description' : payment_description , 'logo_url' : logo_url , 'page_callback_success' : page_callback_success , 'page_callback_failure' : page_callback_failure , 'page_callback_cancel' :page_callback_cancel});
            }else {
                icon = 'fas fa-times';
                $('#participer').modal('hide');
                alert(icon,result.info);
            }
            
            $('#loading').hide();
            if(result.status == 'success'){
                number_client_function();
                $('#participer').modal('hide');
                icon = 'fas fa-check';
            }else if (result.status == 'fail') {
                icon = 'fas fa-times';
            }

        }
    });
    event.stopImmediatePropagation();
    return;
});
var number_client = 0;
var ctx = document.getElementById('myChart').getContext('2d');
function number_client_function(){
    var id_product = $('#id_product').text();
    $.ajax({
        url:'<?=base_url('Admin/get_product_client_bet_number')?>',
        type:'POST',
        data: {'id_product':id_product},
        dataType:'json',
        beforeSend: function(){
            $('#loader').css('display','');
        },
        success: function (response) {
            $('#loader').css('display','none');
            number_client = response.amount;
            $('#number_client').html(number_client);
            if(number_client == 0){
                value = [0];
            }else if (number_client <= 10) {
                value = [number_client];
            }else if (number_client <= 20) {
                value = [0,number_client];
            }else if (number_client <= 30) {
                value = [0,20,number_client];
            }else if (number_client <= 40) {
                value = [0,20,30,number_client];
            }else if (number_client <= 50) {
                value = [0,20,30,40,number_client];
            }else if (number_client <= 60) {
                value = [0,20,30,40,50,number_client];
            }else if (number_client <= 70) {
                value = [0,20,30,40,50,60,number_client];
            }else if (number_client <= 80) {
                value = [0,20,30,40,50,60,70,number_client];
            }else if (number_client <= 90) {
                value = [0,20,30,40,50,60,70,80,number_client];
            }else if (number_client <= 100) {
                value = [0,20,30,40,50,60,70,80,90,number_client];
            }else{
                value = [0,20,30,40,50,60,70,80,90,100,number_client];
            }   
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line', // also try bar or other graph types
    // The data for our dataset
    data: {
        labels: ["0", "10", "20", "30", "40", "50", "60", "70", "80", "90", "100", "Plus"],
        // Information about the dataset
    datasets: [{
            label: "Participants",
            backgroundColor: 'lightblue',
            borderColor: 'royalblue',
            data: value,
        }]
    },
    // Configuration options
    options: {
    layout: {
      padding: 10,
    },
        legend: {
            position: 'bottom',
        },
        title: {
            display: true,
            text: 'Participants au tirage'
        },
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Nombre Participants Total'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Nombre Participants Enregistré'
                }
            }]
        }
    }
            });   
        }
    });
}
setTimeout(number_client_function(),300);

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

            alert(icon,response.info);
        }
    });
}
</script>

</body>

</html>
