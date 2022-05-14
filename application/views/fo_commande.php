<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url(); ?>CommandeCtrl/commander" method="post">
        <input type="text" name="idForfait" placeholder="idForfait">
        <input type="text" name="idUser" placeholder="idUser">
        <input type="number" name="qte" placeholder="qte">
        <input type="submit" value="valider">
    </form>
</body>
</html>