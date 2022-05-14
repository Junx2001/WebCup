<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('user')!=null)
        {
            redirect('FrontOffice/index');
        }
	}
    public function index()
	{
		redirect('UserCtrl/login');
	}
    public function login()
	{
		$this->load->view('fo_login.php');
	}

    public function traitLogin()
	{
		$this->load->model('User');
        $user = $this->User->getUserByCredentials($this->input->post('email'),$this->input->post('mdp'));
        if(count($user)>0){
            $this->session->set_userdata('user',$user);
            redirect('FrontOffice/index');
        
        }
        else
        {
            $data = array('erreur'=> 'Verifier votre nom et votre mot de passe');
            $this->load->view('fo_login.php',$data);
        }
	}
	
			
}
