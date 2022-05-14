<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller {
	

    
    public function __construct()
	{
		parent::__construct();

        if($this->session->userdata('user')==null)
        {
            redirect('LoginBackOffice/login');
        }

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');

	}



	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}




	public function crudForfait()
	{
		try{
			$crud = new grocery_CRUD();

		
            $crud->set_table('forfait');
			$crud->set_subject('Forfait');
			$crud->columns('nom', 'tailleMin', 'idLieu', 'type');
			$crud->display_as('tailleMin', 'Stockage minimum');
			$crud->display_as('idLieu', 'Lieu');
			$crud->fields('nom', 'tailleMin', 'idLieu', 'type');
			$crud->required_fields('nom','tailleMin','idLieu','type');
            $crud->set_relation('idLieu','lieu','nom');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    public function crudLieu()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('lieu');
			$crud->set_subject('Lieu');
			$crud->required_fields('nom','longitude','latitude');
			$crud->columns('nom','longitude','latitude');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    public function logout()
	{
        $this->session->unset_userdata('user');
        redirect('LoginBackOffice/login');
	}
   
			
}
