<?php
/**
 * System messages translation for CodeIgniter(tm)
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['welcoming']      = "Bienvenue sur le site de Post Gen, Choisissez le forfait qui vous convient";



$lang['sidebar'] = '<li class="submenu-item">
<a href="'.site_url('BackOffice').'">Forfait</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudType').'">Type de forfait</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudLieu').'">Lieu de dépôt</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudTypeDonne').'">Type de données</a>
</li>';


$lang['option'] = '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
<li>
    <h6 class="dropdown-header">Bonjour, Admin!</h6>
</li>
<li>
    <hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="'.site_url('BackOffice/logout').'"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Se déconnecter</a></li>
</ul>';