<?php
/**
 * System messages translation for CodeIgniter(tm)
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['welcoming']      = "Welcome to Post Gen, Choose the package that suits you";


$lang['sidebar'] = '<li class="submenu-item">
<a href="'.site_url('BackOffice').'">Package</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudType').'">Type of package</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudLieu').'">Place of deposit</a>
</li>
<li class="submenu-item">
<a href="'.site_url('BackOffice/CrudTypeDonne').'">Type of data</a>
</li>';


$lang['option'] = '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
<li>
    <h6 class="dropdown-header">Hello, Admin!</h6>
</li>
<li>
    <hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="'.site_url('BackOffice/logout').'"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Sign Out</a></li>
</ul>';

