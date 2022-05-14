<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {
	
    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('FrontOffice/accueil');
	}

    public function accueil(){
        redirect('CommandeCtrl');
    }

    public function logout()
	{
        $this->session->unset_userdata('user');
        redirect('FrontOffice/accueil');
	}
}
