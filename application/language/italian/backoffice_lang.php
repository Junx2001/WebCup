<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['welcoming']      = "Bienvenue sur le site de Post Gen, Choisissez le forfait qui vous convient";



$lang['sidebar'] = '<li class="submenu-item">
<a href="'.site_url('BackOffice').'">Pacchetto</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudType').'">Tipo di pacchetto</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudLieu').'">Luogo di deposito</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudTypeDonne').'">tipo di dati</a>
</li>';


$lang['option'] = '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
<li>
    <h6 class="dropdown-header">Ciao, Admin!</h6>
</li>
<li>
    <hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="'.site_url('BackOffice/logout').'"><i class="icon-mid bi bi-box-arrow-left me-2"></i>Esci</a></li>
</ul>';