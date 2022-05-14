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
            'view' => 'fo_paiement',
            'forfaits' => $this->Paiement->getPaiements()
        );
        $this->load->view('fo_paiement');
    }

    // insertion paiement
    public function payer(){
        $idCommande = $this->input->post('idCommande');
        $typeDevise = $this->input->post('type');
        $this->load->model('Paiement');
        $this->Paiement->payerCommande($idCommande,$typeDevise);

    }
			
}
