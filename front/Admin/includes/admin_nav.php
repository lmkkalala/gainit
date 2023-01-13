<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon-settings"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Panel admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="<?=base_url('Welcome/index/admin')?>"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/UsAdmin')?>"><i class="far fa-user"></i><span>Admin</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/seller')?>"><i class="far fa-user"></i><span>Vendeurs</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/client')?>"><i class="far fa-user"></i><span>Clients</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/Produit')?>"><i class="fas fa-table"></i><span>Produits</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/product_winer')?>"><i class="fas fa-table"></i><span>Produit & Gagnant</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/admin_system_log')?>"><i class="fas fa-address-card"></i><span>Journal Système</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/all_testimonies')?>"><i class="fas fa-user-circle"></i><span>Temoignages</span></a>
                    </li> 
                    <!-- <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/register')?>"><i class="fas fa-user-circle"></i><span>Créer un compte</span></a>
                    </li> -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Welcome/index/profile')?>"><i class="fas fa-user"></i><span>Profile</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?=base_url('Logout')?>"><i class="fas fa-sign-out-alt"></i>&nbsp;Se Déconnecter</a>
                    </li>
                </ul>
            </div>
        </nav>