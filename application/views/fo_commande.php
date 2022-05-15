<?php 
// var_dump($forfaits);
// var_dump($devise);
$devise = $devise->results;
// // var_dump($devise);
$euro = $devise->EUR;
$livre = $devise->GBP;
// // var_dump($crypto);
$bitcon=$crypto[0]->price_usd;
$dogcoin=$crypto[3]->price_usd;
// var_dump($bitcon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion dollars</title>
      <!-- Favicons -->
      <link href="<?php echo  site_url() ?>assets/images/front-office/favicon.png" rel="icon">
    <link href="<?php echo  site_url() ?>assets/images/front-office/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo  site_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/aos/aos.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo  site_url() ?>assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <!-- <link href="assets/css/variables.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <link href="<?php echo  site_url() ?>assets/css/variables-purple.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?php echo  site_url() ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo  site_url() ?>assets/css/style.css">

</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Choix de devise</a></li>
        <li class="nav-item"><a href="<?php echo  site_url() ?>/FrontOffice/index" class="nav-link">Home</a></li>
      </ul>
    </header>
  </div>
    <div class="container">
        <h1>Choix méthode de payement</h1>
        <form action="<?php echo site_url(); ?>CommandeCtrl/commander" method="post">
        <div class="row">
        <div class="col-md-4">
        <label for="exampleInputEmail1">Choisissez votre devise:</label>
                <div class="form-group">
                    <select value="" class="form-control form-control-lg" id="unite" name="unite">
                            <option name="" id="dolar" value="$">$</option>
                            <option name="" id="euro" value="€">€</option>
                            <option name="" id="livre" value="£">£</option>
                            <option name="" id="Bitcoin" value="bitcoin">BitCoin</option>
                            <option name="" id="Dogecoin" value="dogcoin">Dogecoin</option>
                        </select>
                </div>
               
                   
        </div>
        <div class="col-md-4">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Quantite:</label>
                    <input type="number" class="form-control form-control-lg" id="qte" name="qte" placeholder="qte" onChange="calcule()">
                </div>
        </div>
        <div class="col-md-4 m-2">
        <input type="submit" class="btn btn-primary" value="valider">
        </div>
        </div>
        
      <div>
      </form>
    <div>

    <div class="card" style="width: 18rem;display: none;" id="show-card">
  <div class="card-body">
    <h5 class="card-title p-2">
    <div id="valeur" class="font-weight-bold h2 text-center"></div>
    </h5>
  </div>
</div>


    
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
  </footer>
</div>
     <!-- Vendor JS Files -->
     <script src="<?php echo  site_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/aos/aos.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo  site_url() ?>assets/vendors/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo  site_url() ?>assets/js/main-fo.js"></script>
    <script src="<?php echo  site_url() ?>assets/js/index.js"></script>

</body>
<script>

function calcule() {
        //alert(id);
        // var r = confirm("Do you want to Delete");
        var temp = document.getElementById('unite').value;
        var valeur = document.getElementById('valeur');
        var qte = document.getElementById('qte').value;
        if(temp=="$"){
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = "<?php echo $forfaits['prix'] ?>"+temp;
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?>;
                var totale = <?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?>;
                valeur.innerHTML = totale;
            }
        }else if (temp =="€"){
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = <?php echo $forfaits['prix'] ?> * <?php echo $euro;?>  +temp;
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?>;
                var totale = <?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?> * <?php echo $euro;?>;
                valeur.innerHTML = totale +temp;
            }


        }else if(temp =="£"){
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = <?php echo $forfaits['prix'] ?> * <?php echo $livre;?>+temp;
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?>;
                var totale =(<?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?>) * <?php echo $livre;?>;
                valeur.innerHTML = totale+temp;
            }
        }else if(temp =="bitcoin"){
            console.log("balqllsfql");
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = <?php echo $forfaits['prix'] ?> / <?php echo $bitcon;?> +temp;
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?>;
                var totale =(<?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?>) / <?php echo $bitcon;?>;
                valeur.innerHTML = totale;
            }
        }else if(temp =="dogcoin"){
            if (qte <= <?php echo $forfaits['tailleMin']; ?>){
                valeur.innerHTML = <?php echo $forfaits['prix'] ?> / <?php echo $dogcoin;?> +temp ;
            }else{
                var diff = qte - <?php echo $forfaits['tailleMin']; ?> ;
                var totale =(<?php echo $forfaits['prix'] ?> + 0.0 + diff * <?php echo $forfaits['prixAdd']; ?>) / <?php echo $dogcoin;?>;
                valeur.innerHTML = totale +" "+temp;
            }
        }
        var x = document.getElementById("show-card");
        x.style.display = "block";
    }
</script>

</html>