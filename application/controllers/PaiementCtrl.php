<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaiementCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('user')==null)
        {
            redirect('UserCtrl');
        }
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

    public function equivalencePrix(){
        $idUser = $this->session->userdata('user');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeNotPaidByIdUser($idUser);

        $sumAPayer = $this->Commande->getSumCommandes($idUser);
        
    }
			
}
