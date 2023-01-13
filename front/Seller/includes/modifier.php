<?php 
  if (!empty($this->session->flashdata('notification'))){ 
     if ($this->session->flashdata('notification') == 'Vos information ont été modifier avec succes.') {
            $icon = 'success';
        }else{
            $icon = 'warning';
        }

?> 
    <script type="text/javascript">
         swal({
          text: "<?=$this->session->flashdata('notification')?>",
          icon: "<?=$icon?>",
          button: false,
        });
    </script>
<?php }?>
<style media="screen">
label
{
  border: 0px;
  border-bottom: 1px solid grey;
  padding: 10px;
}
.mt-3 input[type="file"]
{
  border:0px;
  padding: 8px;
}

.mb-12 .card
{
  padding: 10px;
  height: 350px;
}
.card-body,.mb-0
{
  font-size: 15px;
}
</style>
<?php foreach ($connected_user as $key => $value) {?>
  <form action="<?=base_url('Client/update_client/seller')?>" method="POST" enctype="multipart/form-data">
          <div class="row gutters-sm col-md-12">
            <div class="col-md-4 mb-12 image">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url('assets/img/user/').$connected_user[0]['profile']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <label>Changer Photo de profil</label>
                      <input type="hidden" value="<?=base_url('assets/img/user/'.$connected_user[0]['profile'])?>" name="current_profile">
                      <input type="file" name="profile" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Type d'Utilisateur</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" name="user_type" class="form-control" value="<?=$connected_user[0]['usertype']?>" readonly>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Photo Couverture</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <div class="row">
                            <div class="col-sm-9">
                              <input type="hidden" value="<?=$user[$key]['cover_store_image']?>" name="current_cover_store_image">
                              <input type="file" name="cover_store_image" class="form-control" value="">
                            </div>
                            <div class="col-sm-3">
                              <img src="<?=base_url('assets/img/cover_store/'.$user[$key]['cover_store_image'])?>" height="50" width="50">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Noms</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" class="form-control" name="name" value="<?=$connected_user[0]['username']?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="email" name="email" class="form-control" value="<?=$connected_user[0]['email']?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Téléphone</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="tel" name="phone" class="form-control" value="<?=$connected_user[0]['phone']?>">
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Addresse</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" name="province" class="form-control" value="<?=$connected_user[0]['province']?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Ville</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" name="city" class="form-control" value="<?=$connected_user[0]['city']?>">
                        </div>
                      </div>
                      <hr>
                          <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Pays</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" name="country" class="form-control" value="<?=$connected_user[0]['country']?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Nom Boutique</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <input type="text" name="store_name" class="form-control" value="<?=$connected_user[0]['store_name']?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-12 text-secondary">
                          <textarea name="description" class="form-control" value="" style="max-height:100px;overflow-y: hidden; min-height: 100px;"><?=$connected_user[0]['description']?></textarea>
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><button type="submit" class="btn btn-primary w-100">Modifier</button></div>
                  </div>
                </div>
              </div>
            </div>
<?php }?>
          </div>
          </form>
