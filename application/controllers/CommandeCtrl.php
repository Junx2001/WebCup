<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForfaitCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('ForfaitCtrl/allForfaits');
	}

    public function commander()
    {
        $idForfait = $this->input->get('idForfait');
        $idUser = $this->input->get('idUser');
        $qte = $this->input->get('qte');
        

        $this->load->model('Commande');
        $this->Commande->commander($idUser,$idForfait,$qte);

    }

    public function commandesByidUser()
    {
        $idUser = $this->input->get('idUser');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeByIdUser($idUser);

    }

    public function commandeNotPaidByidUser()
    {
        $idUser = $this->input->get('idUser');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeNotPaidByIdUser($idUser);

    }

    public function commandeAlreadyPaidByidUser()
    {
        $idUser = $this->input->get('idUser');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeAlreadyPaidByIdUser($idUser);

    }


  
   
			
}
