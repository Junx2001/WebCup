<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostGen</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-7 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="<?php echo  site_url() ?>assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Bienvenue.</h1>
                    <p class="auth-subtitle mb-5">Connectez-vous en tant qu'administrateur.</p>

                    <form action="<?php echo  site_url() ?>LoginBackOffice/traitement" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Mot de passe" name="mdp">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        
                        <?php if (isset($erreur)) { ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <i class="bi bi-exclamation-circle"></i> 
                                <?php echo $erreur; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>


                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Valider</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div id="auth-right">
                <img src="<?php echo  site_url() ?>assets/images/bg/globe.gif" alt="Logo" style="width:100%; height:100%;">
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo site_url(); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo site_url(); ?>assets/js/main.js"></script>
</body>

</html>