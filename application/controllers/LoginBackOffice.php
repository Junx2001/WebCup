<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginBackOffice extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('admin')!=null)
        {
            $data = array('view'=> 'dashboard');
            $this->load->view('template',$data);
        }

	
	}
    public function login()
	{
		$this->load->view('login.php');
	}

    public function traitement()
	{
		$this->load->model('Administrateur','Admin');
        $admin = $this->Admin->getAdminByCredentials($this->input->post('email'),$this->input->post('mdp'));
        if(count($admin)>0){
            $this->session->set_userdata('admin',$admin);
            $data = array('view'=> 'dashboard');
            $this->load->view('template',$data);
        }
        else
        {
            $data = array('erreur'=> 'Verifiez votre nom et votre mot de passe');
            $this->load->view('login.php',$data);
        }
	}
	
			
}
