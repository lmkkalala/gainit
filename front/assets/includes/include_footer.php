<script type="text/javascript">
    $(document).ready(function(){
        $('#testimony').on('show.bs.modal', function (e) {
            product_sold_id = $(e.relatedTarget).data('id');
            $('#product_sold_id').val(product_sold_id);
        });
    });

    $(document).on('submit','form#testimony_form',function (event) {
       event.preventDefault();
       var data = {};
       data.identifier = $('#identifier').val();
       data.testimony_message = $('#testimony_message').val();
       var id = $('#product_sold_id').val();
       if (id != null) {
        data.product_sold_id = $('#product_sold_id').val();
       }
       
       $.ajax({
        url:'<?=base_url('Welcome/add_to_testimony')?>',
        type:'POST',
        data:data,
        dataType:'json',
        beforeSend: function(){
            $('#submit_testimony').prop('disabled',true);
        },
        success: function(response){
            $('#submit_testimony').prop('disabled',false);
            var icon = '';
            if (response.status == 'warning') {
                icon = 'fas fa-exclamation-triangle';
            }else if (response.status == 'error') {
                icon = 'fas fa-times';
            }else if (response.status == 'success') {
                $('#testimony').modal('hide');
                $('#product_sold_id').val('');
                icon = 'fas fa-check';
            }

            iziToast.show({
                    theme: 'dark',
                    icon: icon,
                    timeout: 8000,
                    position: 'topRight',
                    message: response.info,
                    progressBarColor: 'rgb(0, 255, 184)',
            });
        }
    });
       event.stopImmediatePropagation();
       return;
    });
</script>
<?php if (!empty($this->session->identifier)): ?>
<div class="modal fade" id="testimony">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center;">TEMOIGNAGE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button><br>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px;text-align: center;">
                        <div class="col-12">
                            <h5 style="color: black;" class="h6">Laisser nous un mot de comment vous profiter de nos services.</h5>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <form id="testimony_form">
                                <div class="d-flex justify-content-center">
                                    <img src="<?=base_url().'assets/img/user/'.$this->session->profile?>" class="rounded-circle" width="100">
                                    <input type="hidden" value="<?=$this->session->identifier?>" name="identifier" id="identifier">
                                    <input type="hidden" id="product_sold_id" name="product_sold_id">
                                </div>
                                <div class="d-flex justify-content-start">
                                    <span class="h5"><?=$this->session->names?></span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <textarea class="form-control" id="testimony_message" name="testimony_message" placeholder="500 caractères" required></textarea>
                                </div>
                                <button type="submit" id="submit_testimony" class="btn btn-primary w-100 mt-2">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>
<?php endif; ?>
<div style="margin-top:5%;"></div>
<div class="container-fluid fixed-bottom d-sm-none bg-white">
    <div class="row p-4">
        <div class="col-2">
            <a href="<?=site_url('Welcome')?>"><i class="icofont-home text-danger"></i></a>
        </div>
        <div class="col-2">
            <a href="<?=site_url('Welcome/index/shop')?>"><i class="icofont-food-cart text-danger"></i></a>
        </div>
        <div class="col-2">
            <a href="<?=site_url('Welcome/index/article')?>"><i class="icofont-cart text-danger"></i></a>
        </div>
        <div class="col-2">
            <a href="<?=site_url('Welcome/index/contact')?>"><i class="icofont-phone text-danger"></i></a>
        </div>
        <div class="col-2">
            <a href="<?=site_url('Welcome/index/about')?>"><i class="icofont-question-circle text-danger"></i></a>
        </div>
<?php
                                    if ($this->session->usertype == ''):
                                        $account = site_url('Welcome/index/login');
                                    elseif ($this->session->usertype == 'client'):
                                        $account = site_url('Welcome/index/mon_compte?commandes');
                                    elseif($this->session->usertype == 'seller'):
                                        $account = site_url('Welcome/index/seller');
                                    elseif($this->session->usertype == 'admin'):   
                                        $account = site_url('Welcome/index/admin');
                                    else:
                                        $account = site_url('Welcome/index/login');  
                                    endif;
?>
        <div class="col-2">
            <a href="<?=$account?>"><i class="icofont-user text-danger"></i></a>
        </div>
    </div>
</div>
<footer class="mt-3 d-none d-md-block"  style="background-color:#afafaf;">
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-3 d-none d-sm-block">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index"><img src="<?=base_url('assets/img/logo/logo3_footer.png')?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="text-white">Pourquoi acheter un produit à 10$ , si vous pouvez l'avoir à 1$? Tentez votre chance et Soyez le bienheureux.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-none d-sm-block">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="text-white">Liens Rapides</h4>
                            <ul class="text-white">
                                <li class="text-white"><a href="<?=base_url('Welcome/index/about')?>" class="text-white">A Propos</a></li>
                                <!-- <li><a href="#">Offres & Remises</a></li> -->
                                <!-- <li><a href="#">Obtenir un Coupon</a></li> -->
                                <li class="text-white"><a href="<?=base_url('Welcome/index/contact')?>" class="text-white">Contacter nous</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-3 mb-5 d-none d-sm-block">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="text-white">Nos Produits</h4>
                            <select class="form-control">
                                <?php foreach ($category_show_all as $key => $value) { ?>
                                <option class="text-white"><a href="#" class="text-white"><?php echo $category_show_all[$key]['categorie'];?></a></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-5 d-none d-sm-block">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="text-white">Aides</h4>
                            <ul class="text-white">
                                <li class="text-white"><a href="#" class="text-white">Questions fréquemment posées</a></li>
                                <li class="text-white"><a href="#" class="text-white">Termes & Conditions</a></li>
                                <li class="text-white"><a href="#" class="text-white">Politique de Confidentialité</a></li>
                                <li class="text-white"><a href="#" class="text-white">Signaler un Problème</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="footer-copy-right">
                      <p class="text-white">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous les Droits sont Réservés
                      </p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <!-- <a href="#"><i class="fas fa-globe"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
