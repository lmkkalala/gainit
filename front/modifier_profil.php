<?php 
    if (!empty($this->session->flashdata('notification'))){
        if ($this->session->flashdata('notification') == 'Vos information ont été modifier avec succes.') {
            $icon = 'fas fa-check';
        }else{
            $icon = 'fas fa-info';
        }
?> 
    <script type="text/javascript">
         iziToast.show({
                    theme: 'white',
                    icon: '<?=$icon?>',
                    timeout: 8000,
                    position: 'topRight',
                    message: "<?=$this->session->flashdata('notification')?>",
                    progressBarColor: 'rgb(0, 255, 184)',
            });
    </script>
<?php }?>
<div class="panel">
    <div class="bio-graph-heading" style="background-color:  rgba(0, 0, 0, 0.6);">
      Modification du Profil
    </div>
    <div class="panel-body bio-graph-info">
        <div class="row">
            <div class="col-12">
                <style media="screen">
            .bio-row label
            {
              margin-right: 20px;
            }
            .bio-row input
            {
              margin-right: 10px;
              margin-bottom: 10px;
              border: 0px;
              padding: 10px;
              font-size: 12px;
              border-radius: 5px;
            }
            /*.bio-row input[type="password"]
            {
              width: 300px;
            }*/
            .btn-primary
            {
              padding: 20px;
              border-radius: 5px;
              background-color: rgba(0, 0, 0, 0.6);
            }
          </style>
        <form action="<?=base_url('Client/update_client')?>" method="POST" enctype="multipart/form-data">
            
<?php
    foreach ($user as $key => $value) :
?>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <input type="hidden" value="<?=base_url('assets/img/user/'.$user[$key]['profile'])?>" name="current_profile">
                        <img src="<?=base_url('assets/img/user/'.$user[$key]['profile'])?>" height="50" width="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label style="width:auto;">Modifier Profile </label>
                        <input type="file" name="profile">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Utilisateur</label>
                        <input type="text" name="user_type" value="<?=$user[$key]['usertype']?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label class="col-md-3">Noms </label>
                        <input type="text" name="name" value="<?=$user[$key]['username']?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Email</label>
                        <input type="text" name="email" value="<?=$user[$key]['email']?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Téléphone </label>
                        <input type="text" name="phone" value="<?=$user[$key]['phone']?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Pays </label>
                        <input type="text" name="country" value="<?=$user[$key]['country']?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Province</label>
                        <input type="text" name="province" value="<?=$user[$key]['province']?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Ville</label>
                        <input type="text" name="city" value="<?=$user[$key]['city']?>">
                    </div>
                </div>
            </div>

<?php
    if ($this->session->usertype == 'seller') {
?>
            <div class="row">
                <div class="col-md-6">     
                    <div class="bio-row">
                        <img src="<?=base_url('assets/img/cover_store/'.$user[$key]['cover_store_image'])?>" height="50" width="50">
                        <input type="hidden" name="current_cover_store_image" value="<?=$user[$key]['cover_store_image']?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label style="width:auto;">Photo Couverture Boutique </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Boutique </label>
                        <input type="text" name="store_name" value="<?=$user[$key]['store_name']?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <input type="file" name="cover_store_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3">Description </label>
                        <textarea style="max-height:100px;overflow-y: hidden; min-height: 100px;" name="description"><?=$user[$key]['description']?></textarea>
                    </div>
                </div>
            </div>
             
<?php
    }
  endforeach;
?>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                      <label style="width:auto;">Ancien</label>
                      <input type="password" autocomplete="off" name="old_pass" placeholder="Ancien mot de passe" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                      <label style="width:auto;">Nouveau</label>
                      <input type="password" autocomplete="off" name="new_pass" placeholder="Changer mot de passe" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                      <label style="width:auto;">Confirmer</label>
                      <input type="password" autocomplete="off" name="conf_pass" placeholder="Confirmer nouveau mot de passe" value="">
                    </div>
                </div>
            </div>           
            <div class="row">
                <div class="col-12">
                    <div class="bio-row">
                      <button type="submit" name="button" class="btn btn-primary" style="width: auto;">Modifier</button>
                    </div>
                </div>
            </div>
          </form>
            </div>
        </div>
    </div>
</div>
