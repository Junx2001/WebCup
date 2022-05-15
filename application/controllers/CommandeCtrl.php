<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommandeCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        // if($this->session->userdata('user')==null)
        // {
        //     redirect('UserCtrl');
        // }
	}
	
	public function index(){
		redirect('CommandeCtrl/commanderPage');
	}

    public function commanderPage(){
        $id = $this->input->get('id');
        $data['idforfait']=$id;
        $forfaits = $this->input->get('id');
		$this->session->set_userdata('forfaits',$forfaits);
		$this->load->model('Forfait');
		$myForfaits = $this->Forfait->getForfaitById($id);
		$data['forfaits']=$myForfaits;

        $this->load->model('WebService');
        $data['devise'] = $this->WebService->getDevise();
        $data['crypto'] = $this->WebService->getCrypto();
        $this->load->view('fo_commande',$data);
    }

    public function commander()
    {
        // $idForfait = $this->input->post('idForfait');
       
        // $idUser = $this->session->userdata('user');
        // $qte = $this->input->post('qte');
        

        // $this->load->model('Commande');
        // $this->Commande->commander($idUser,$idForfait,$qte);
        $this->load->view('commande_valider');

    }

    public function commandesByidUser()
    {
        $idUser = $this->session->userdata('user');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeByIdUser($idUser);
        var_dump($listeCommande);
    }

    public function commandeNotPaidByidUser()
    {
        $idUser = $this->session->userdata('user');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeNotPaidByIdUser($idUser);
        var_dump($listeCommande);
    }

    public function commandeAlreadyPaidByidUser()
    {
        $idUser = $this->session->userdata('user');

        $this->load->model('Commande');
        $listeCommande = $this->Commande->getCommandeAlreadyPaidByIdUser($idUser);
        var_dump($listeCommande);
    }


  
   
			
}
