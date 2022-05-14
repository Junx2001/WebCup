<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url(); ?>PaiementCtrl/payer" method="post">
        <input type="text" name="idCommande" placeholder="idCommande">
        <input type="text" name="type" placeholder="type">
        <input type="submit" value="valider">
    </form>
</body>
</html>