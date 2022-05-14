<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	

    
    public function __construct()
	{
		parent::__construct();
        

        
	}
	
	public function main(){
		$this->session->set_userdata('language','english');
        var_dump($this->session);
	}
    public function essai()
    {
        $idiom = $this->session->userdata('language');
        $this->lang->load('welcome', $idiom);
        $oops = $this->lang->line('welcoming');
        var_dump($oops);
    }



   
			
}
