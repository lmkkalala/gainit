<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gain IT - Admin</title>
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets_admin/fonts/simple-line-icons.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/img/favicon.ico')?>">
</head>

<body class="bg-gradient-primary">
    <?php include('includes/loader_admin.php');?>
    <div id="wrapper" style="display:none;height: 700px;overflow: auto;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;<?=base_url()?>assets_admin/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Créer un compte Admin</h4>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nom" name="first_name"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Prenom" name="last_name"></div>
                                </div>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Mail " name="email"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Mot de pass" name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Confirmer mot de pass" name="password_repeat"></div>
                                </div>
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"></div>
                            <div class="text-center"><a class="text-center small" href="login.php">Avez-vous déjà un compter ? Connectez-vous</a></div>
                            <div class="text-center"><a href="Admin.php">Retour</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets_admin/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets_admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?=base_url()?>assets_admin/js/theme.js"></script>
</body>

</html>