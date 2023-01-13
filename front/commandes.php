<div class="panel">
    <div class="bio-graph-heading" style="background-color:  rgba(0, 0, 0, 0.6);">
      Détails sur vos Commandes
    </div>
    <div class="panel-body bio-graph-info">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive" id="dataTable" role="grid" aria-describedby="dataTable_info">
                  <table class="table" id="product_tirage">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Produit</th>
                        <th>Dates</th>
                        <th>Lien de la mise</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
  $count = 1;
  foreach ($produit_en_client as $key => $value) :
    if ($produit_en_client[$key]['sellValidate'] == '0') {
      $tirage = 'En cours';
    }else{
      $tirage = 'Cloturer';
    }
    $row[$key] = $this->db->get_where('produit_vendu', array('client_id' => $produit_en_client[$key]['client_id'],'product_id' =>  $produit_en_client[$key]['product_id'],'seller_id'=> $produit_en_client[$key]['seller_id']))->result_array();
?>
   
                      <tr>
                        <td><img src="<?=base_url('dist/produit/').$produit_en_client[$key]['caption_image']?>" height="60" width="60"></td>
                        <td>
                          <ul>
                            <li><span class="font-weight-bold">Article </span><span><?=$produit_en_client[$key]['product']?></span></li>
                            <li><span class="font-weight-bold">Mise </span><span><?=$produit_en_client[$key]['mise']?></span></li>
                            <?php if ($produit_en_client[$key]['validate_tirage'] == '1' and count($row[$key]) > 0): ?>
                              <li>
                                <span class="font-weight-bold">Félicitation </span>
                                <span><button style="padding: 10px!important; font-size: 10px!important;" type="button" class="btn btn-success" data-toggle="modal" data-target="#testimony" data-id="<?=$produit_en_client[$key]['product_id']?>">Valider</button></span>
                              </li>
                            <?php else: ?>
                                <li><span class="font-weight-bold">Status </span><span><label class="badge badge-info"><?=$tirage?></label></span></li>
                            <?php endif ?>
                            
                          </ul>
                        </td>
                        <td>
                          <ul>
                            <li><span class="font-weight-bold">Mise </span><span><?=$produit_en_client[$key]['date']?></span></li>
                          <li><span class="font-weight-bold">Publication </span><span><?=$produit_en_client[$key]['end_date']?></span>
                          </li>
                          </ul>
                        </td>
                        <td>
                          <a class="cls_copy_pg_action copyAction copy-action-btn" onclick="copyToClipboard('link<?=$produit_en_client[$key]['id']?>')"> <i class="far fa-copy"></i> Copy</a> 

                          <input class="form-control" id="link<?=$produit_en_client[$key]['id']?>" style="width:100px;display:none;" value="<?=site_url().'welcome/sharedLink/'.$produit_en_client[$key]['code_mise']?>">
                        </td>
                      </tr>
<?php
  $count++;
  endforeach;
?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>

 <script>
      function copyToClipboard(element) {
    var copyText = document.getElementById(element);
    //copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value); 
      iziToast.show({
                    theme: 'white',
                    icon: 'fas fa-check',
                    timeout: 8000,
                    position: 'topRight',
                    message: '<p style="font-size:14px;">Le lien a été copier, partage le au max pour avoir plus de chance de gagne.</p>',
                    progressBarColor: 'rgb(0, 255, 184)',
      });
    }
</script>
