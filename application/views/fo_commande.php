<?php 
var_dump($forfaits);
?>
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
    <select value="" id="unite" name="unite">
        <option name="" id="dolar">$</option>
        <option name="" id="euro">€</option>
        <option name="" id="livre">£</option>
        <option name="" id="Bitcoin">BitCoin</option>
        <option name="" id="Dogecoin">Dogecoin</option>
    </select>
        <input type="text" name="idForfait" placeholder="idForfait">
        <input type="text" name="idUser" placeholder="idUser">
        <input type="number" id="qte" name="qte" placeholder="qte" onChange="calcule()">
        <input type="submit" value="valider">
    </form>
    <div id="valeur"></div>
</body>
<script>

function calcule() {
        //alert(id);
        // var r = confirm("Do you want to Delete");
        var temp = document.getElementById('unite').value;
        console.log(temp);
        var valeur = document.getElementById('valeur');
        var qte = document.getElementById('qte').value;
        if(temp="$"){
            console.log(qte);
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = "<?php echo $forfaits['prix'] ?>";
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?>;
                var totale = <?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?>;
                valeur.innerHTML = totale;
            }
        }else{

            

        }
        //if()
        //window.location.href = "<?php echo site_url('controller_d/login/admin_link_delete_user');?>?id="+id;
        

    }
    window.location.href = "<?php echo site_url('controller_d/login/admin_link_delete_user');?>?id="+id;
</script>
</html>