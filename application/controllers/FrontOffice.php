<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {
	
    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('FrontOffice/traduction');
	}

    public function accueil(){
        redirect('CommandeCtrl');
    }

    public function logout()
	{
        $this->session->unset_userdata('user');
        redirect('FrontOffice/');
	}

	public function traduction()
	{
		if($this->session->userdata('fo_language')==null)
		{
			$language = 'French';
		}
		else
		{
			$language = $this->session->userdata('fo_language');
		}
		
		$this->lang->load('frontoffice', $language);
		$un = $this->lang->line('un');
		$navbar = $this->lang->line('navbar');
		$deux = $this->lang->line('deux');
		$trois = $this->lang->line('trois');
		$quatre = $this->lang->line('quatre');
		$cinq = $this->lang->line('cinq');
		$six = $this->lang->line('six');
		$sept = $this->lang->line('sept');
		$huit = $this->lang->line('huit');
		$neuf = $this->lang->line('neuf');
        $data = array(
			'un' =>$un,
			'navbar'=>$navbar,
			'deux' =>$deux,
			'trois' => $trois,
			'quatre' => $quatre,
			'cinq' => $cinq,
			'six' => $six,
			'sept' => $sept,
			'huit' => $huit,
			'neuf' => $neuf
		);

		$this->load->model('Forfait');
        $forfaits = $this->Forfait->getForfaits();
        

        for( $i=0;$i<count($forfaits);$i++) {
            if($forfaits[$i]['typePayement']=='abonnement mensuel'){
                $forfaits[$i]['periode'] = '/mois';
            }else{
                $forfaits[$i]['periode'] ='';
            }
        }
        
        $data ['forfaits'] = $forfaits;

		$this->load->view('fo_index',$data);


		
	}
	
	public function changeFoLanguage($lang)
	{
		
		$this->session->set_userdata('crud_language',$lang);
		$this->session->set_userdata('fo_language',strtolower($lang));


		redirect('FrontOffice/traduction');
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
