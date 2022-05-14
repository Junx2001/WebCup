<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller {
	

    
    public function __construct()
	{
		parent::__construct();

        if($this->session->userdata('admin')==null)
        {
            redirect('LoginBackOffice/login');
        }

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');

	}
	
	public function index(){
		redirect('BackOffice/crudForfait');
	}



	public function _example_output($output = null)
	{
        $data = array('view' => 'bo_crud','crud' => (array)$output);
		$this->load->view('bo_template.php',$data);
	}




	public function crudForfait()
	{
		try{
			$crud = new grocery_CRUD();

		
            $crud->set_table('forfait');
			$crud->set_subject('Forfait');
			$crud->columns('nom', 'tailleMin', 'idLieu', 'idType');
			$crud->display_as('tailleMin', 'Stockage min');
			$crud->display_as('idLieu', 'Lieu');
            $crud->display_as('idType', 'Type');
			$crud->fields('nom', 'tailleMin', 'idLieu', 'idType');
			$crud->required_fields('nom','tailleMin','idLieu','idType');
            $crud->set_relation('idLieu','lieu','nom');
            $crud->set_relation('idType','typeForfait','nom');

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
    public function crudType()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('typeForfait');
			$crud->set_subject('Type de Forfait');
			$crud->required_fields('nom');
			$crud->columns('nom');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    public function logout()
	{
        $this->session->unset_userdata('admin');
        redirect('LoginBackOffice/login');
	}
   
			
}
