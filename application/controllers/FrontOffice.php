<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {
	
    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('ForfaitCtrl/allForfaits');
		
		// $this->load->view('index',$data);
	}

    public function accueil(){
        redirect('CommandeCtrl');
    }

    public function logout()
	{
        $this->session->unset_userdata('user');
        redirect('FrontOffice/accueil');
	}

	public function formCommande(){
		$forfaits = $this->input->get('forfaits');
		$this->session->set_userdata('forfaits',$forfaits);
		$this->load->model('Forfaits');
		$myForfaits = $this->forfaits->getForfaitById($forfaits);
		$data['forfais']=$myForfaits;
		$this->load->view('formCommande',$data);
	}


}
