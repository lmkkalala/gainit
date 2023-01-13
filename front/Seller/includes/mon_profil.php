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
          <div class="row gutters-sm col-md-12">
            <div class="col-md-4 mb-12 image">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url('assets/img/user/').$connected_user[0]['profile']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <span>Photo de profil</span><hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Photo Couverture</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div class="row">
                        <div class="col-sm-2">
                          <img src="<?=base_url('assets/img/cover_store/'.$user[$key]['cover_store_image'])?>" height="80" width="80">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Type d'Utilisateur</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="Status" class="form-control" value="<?=$connected_user[0]['usertype']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Noms</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="nom" value="<?=$connected_user[0]['username']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="email" name="mail" class="form-control" value="<?=$connected_user[0]['email']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="tel" name="telephone" class="form-control" value="<?=$connected_user[0]['phone']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Type d'activité</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="Status" class="form-control" value="vendeur" disabled>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pays</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="country" class="form-control" value="<?=$connected_user[0]['country']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Addresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="province" class="form-control" value="<?=$connected_user[0]['province']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ville</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="city" class="form-control" value="<?=$connected_user[0]['city']?>" disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom Boutique</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="store_name" class="form-control" value="<?=$connected_user[0]['store_name']?>"disabled>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Description</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <textarea disabled="" name="description" class="form-control" value="" style="max-height:100px;overflow-y: hidden; min-height: 100px;"><?=$connected_user[0]['description']?></textarea>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
            <style type="text/css">
              #create_client_account{
                margin-top: -20%;
              }
    @media only screen and (max-width: 480px) {
        #create_client_account {
          margin-top: auto;
        }
    }
            </style>
            <div class="col-md-4" id="create_client_account">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <span>Créer un compte client qui sera lié à votre compte vendeur en cliquant sur le bouton ci dessous.</span><hr>
                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-6">
                              <span id="create_id_user" style="display: none;"><?=$connected_user[0]['id']?></span>
                              <button type="button" class="btn btn-info mt-2" id="create_account">Creer Compte</button>
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn btn-danger mt-2" id="delete_account">Supprimer Compte</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php }?>
          </div>
