<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginBackOffice extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('admin')!=null)
        {
            redirect('BackOffice/index');
        }

	
	}
    public function index()
	{
		redirect('LoginBackOffice/login');
	}
    public function login()
	{
		$this->load->view('bo_login.php');
	}

    public function traitement()
	{
		$this->load->model('Admin');
        $admin = $this->Admin->getAdminByCredentials($this->input->post('email'),$this->input->post('mdp'));
        if(count($admin)>0){
            $this->session->set_userdata('admin',$admin);
            redirect('BackOffice/index');
        
        }
        else
        {
            $data = array('erreur'=> 'Verifier votre nom et votre mot de passe');
            $this->load->view('bo_login.php',$data);
        }
	}
	
			
}
