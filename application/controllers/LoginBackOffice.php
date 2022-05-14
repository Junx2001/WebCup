<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginBackOffice extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('user')!=null)
        {
            redirect('BackOffice/index');
        }

	
	}
    public function login()
	{
		$this->load->view('bo_login.php');
	}

    public function trait_login()
	{
		$this->load->model('Admin');
        $admin = $this->Admin->getAdminByCredentials($this->input->post('user'),$this->input->post('pwd'));
        if(count($admin)>0){
            $this->session->set_userdata('user',$admin);
            redirect('BackOffice/index');
        
        }
        else
        {
            $data = array('error'=> 'Verifier votre nom et votre mot de passe');
            $this->load->view('bo_login.php',$data);
        }
	}
	
			
}
