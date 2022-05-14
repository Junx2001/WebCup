<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaiementCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('PaiementCtrl/allPaiements');
	}

    // liste tous les Paiements
    public function allPaiements(){
        $this->load->model('Paiement');
        $data = array(
            'view' => 'listePaiement',
            'forfaits' => $this->Paiement->getPaiements()
        );
    }

			
}
