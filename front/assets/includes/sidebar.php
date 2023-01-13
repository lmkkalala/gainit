<div class="profile-nav col-md-3">
    <div class="panel">
        <div class="user-heading round" style="background-color: rgba(0, 0, 0, 0.6);">
            <a href="#">
                <img src="<?=base_url('assets/img/user/'.$this->session->profile)?>" alt="">
            </a>
            <br><br>
            <h1 class="text-white"><?=$this->session->names?></h1>
            <p class="text-white"><?=$this->session->email?></p>
        </div>

        <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET['profil'])){ echo "active"; } ?>">
              <a href="mon_compte?profil"> <i class="fa fa-user"></i>Profile</a>
            </li>
            <li class="<?php if(isset($_GET['modifier_profil'])){ echo "active" ;} ?>">
              <a href="mon_compte?modifier_profil"><i class="fa fa-edit"></i>Modifier profil</a>
            </li>
            <li class="<?php if(isset($_GET['commandes'])){ echo "active" ;} ?>">
              <a href="mon_compte?commandes"><i class="fa fa-calendar"></i>Mes Commandes</a>
            </li>
            <li class="<?php if(isset($_GET['supprimer_compte'])){ echo "active" ;} ?>">
              <a href="mon_compte?supprimer_compte"><i class="fa fa-trash"></i>Supprimer ce Compte</a>
            </li>
            <li class="<?php if(isset($_GET['logout'])){ echo "active" ;} ?>">
              <a href="<?=base_url('Logout')?>"><i class="fa fa-sign-out"></i>Deconnexion</a>
            </li>
        </ul>
    </div>
</div>
