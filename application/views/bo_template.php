<?php
if (empty($view)){
        $view = 'accueil';
    }
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enigma</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url() ; ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo site_url() ; ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo site_url() ; ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo site_url() ; ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo site_url() ; ?>assets/images/favicon.svg" type="image/x-icon">

    
    <?php 

foreach($crud['css_files'] as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach;
 ?>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps ps--active-y">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo site_url() ; ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?php if($view == "bo_dashboard") echo "active"; ?> ">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Statistique</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($view == "bo_crudForfait" || $view == "bo_crudType") echo "active"; ?> has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>CRUD</span>
                            </a>
                            <ul class="submenu <?php if($view == "bo_crudForfait" || $view == "bo_crudType") echo "active"; ?>">
                                <li class="submenu-item <?php if($view == "bo_crudForfait") echo "active"; ?> ">
                                    <a href="<?php echo site_url(); ?>BackOffice">Forfait</a>
                                </li>
                                <li class="submenu-item <?php if($view == "bo_crudType") echo "active"; ?> ">
                                    <a href="#">Type de forfait</a>
                                </li>
                                
                            </ul>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 615px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 207px;"></div></div></div>
        </div>
        <div id="main" class="layout-navbar">
            <header class="mb-3">
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-envelope bi-sub fs-4 text-gray-600"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Admin</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrateur</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="<?php echo site_url() ; ?>assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Bonjour, Admin!</h6>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo site_url() ; ?>LoginBackOffice/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            
            <?php 
              
            
            
            include $view.'.php' ;
          
            
            ?>

        </div>
    </div>
    <script src="<?php echo site_url() ; ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo site_url() ; ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo site_url() ; ?>assets/js/main.js"></script>
    <?php 
        foreach($crud['js_files'] as $file):
     ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach;
?>


</body></html>