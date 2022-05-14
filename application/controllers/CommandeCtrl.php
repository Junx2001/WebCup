<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommandeCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('CommandeCtrl/commanderPage');
	}

    public function commanderPage(){
        $this->load->view('fo_commande');
    }

    public function commander()
    {
        $idForfait = $this->input->post('idForfait');
        $idUser = $this->input->post('idUser');
        $qte = $this->input->post('qte');
        

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
