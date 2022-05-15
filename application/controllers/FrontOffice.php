<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {
	
    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('FrontOffice/traduction');
		// $this->load->view('index');
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

		$this->load->view('index',$data);


		
	}
	
	public function changeFoLanguage($lang)
	{
		
		$this->session->set_userdata('crud_language',$lang);
		$this->session->set_userdata('fo_language',strtolower($lang));


		redirect('FrontOffice/traduction');
	}
}
