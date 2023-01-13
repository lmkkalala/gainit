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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;<?=base_url()?>assets_admin/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Bienvenue Cher Admin</h4>
                                    </div>
                                    <form class="user">
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre adress mail" name="email"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Votre mot de pass" name="password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label text-justify custom-control-label" for="formCheck-1">se souvenir de moi</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Go!</button>
                                        <hr>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.php">Mot de pass oublié ?</a></div>
                                    <div class="text-center"><a class="small" href="register.php">Créer un nouveau compte</a></div><a class="text-left" href="Admin.php">Retour</a></div>
                            </div>
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