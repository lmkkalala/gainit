<div class="panel">
    <div class="bio-graph-heading" style="background-color: rgba(0, 0, 0, 0.6);">
      Détail du Profil
    </div>
    <div class="panel-body bio-graph-info">
        <div class="row">
          <div class="col-12">
              <style media="screen">
            .bio-row label{
              margin-right: 20px;
              text-decoration: underline;
            }
            .bio-row input
            {
              margin-right: 10px;
              margin-bottom: 10px;
              border: 0px;
              padding: 10px;
              font-size: 15px;
              border-radius: 5px;
            }
          </style>
<?php
    foreach ($user as $key => $value) :
?>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Utilisateur</label>
                        <input type="text" name="user_type" value="<?=$user[$key]['usertype']?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label class="col-md-3 font-weight-bold">Noms </label>
                        <input type="text" name="name" value="<?=$user[$key]['username']?>" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Email</label>
                        <input type="text" name="email" value="<?=$user[$key]['email']?>" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Téléphone </label>
                        <input type="text" name="phone" value="<?=$user[$key]['phone']?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Pays </label>
                        <input type="text" name="country" value="<?=$user[$key]['country']?>" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Province</label>
                        <input type="text" name="province" value="<?=$user[$key]['province']?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Ville</label>
                        <input type="text" name="city" value="<?=$user[$key]['city']?>" disabled>
                    </div>
                </div>
            </div>
<?php
    if ($this->session->usertype == 'seller') {
?>

            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-12 font-weight-bold">Photo Couverture Boutique</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <img src="<?=base_url('assets/img/cover_store/'.$user[$key]['cover_store_image'])?>" height="50" width="50">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-4 font-weight-bold">Boutique </label>
                        <input type="text" name="store_name" value="<?=$user[$key]['store_name']?>" disabled>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="bio-row">
                        <label  class="col-md-3 font-weight-bold">Description</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-row">
                        <span style="font-size: 15px;" class="col-md-3" name="description" disabled><?=$user[$key]['description']?></span>
                    </div>
                </div>
            </div> 
            
             
<?php
    }
    endforeach;
?>
          </div>
        </div>
    </div>
</div>
