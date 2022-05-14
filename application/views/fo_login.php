<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>Login user</h1>
                    <form action="<?php echo  site_url() ?>UserCtrl/traitLogin" method="post">
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
</body>
</html>