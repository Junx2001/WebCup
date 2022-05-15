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

		$this->load->library('grocery_CRUD');

	}
	
	public function index(){
		redirect('BackOffice/crudForfait');
	}



	public function _example_output($output = null)
	{
		if($this->session->userdata('bo_language')==null)
		{
			$language = 'French';
		}
		else
		{
			$language = $this->session->userdata('bo_language');
		}
		
		$this->lang->load('backoffice', $language);
		$sidebar = $this->lang->line('sidebar');
		$menu = $this->lang->line('option');
        $data = array(
			'view' => 'bo_crud',
			'crud' => (array)$output,
			'sidebarTranslated' =>$sidebar,
			'menuTranslated' =>$menu
		);

		$this->load->view('bo_template.php',$data);


		
	}

	public function changeBoLanguage($lang)
	{
		
		$this->session->set_userdata('crud_language',$lang);
		$this->session->set_userdata('bo_language',strtolower($lang));


		redirect('BackOffice/crudForfait');
	}


	public function crudForfait()
	{
		try{
			$crud = new grocery_CRUD();

		
			$crud->set_language($this->session->userdata('crud_language'));
            $crud->set_table('forfait');
			$crud->set_subject('Forfait');
			$crud->columns('nom', 'tailleMin', 'idLieu', 'idType','idTypeDonne');
			$crud->display_as('tailleMin', 'Stockage min');
			$crud->display_as('idLieu', 'Lieu');
            $crud->display_as('idType', 'TypeForfait');
			$crud->display_as('idTypeDonne', 'TypeDonne');
			$crud->fields('nom', 'tailleMin', 'idLieu', 'idType','idTypeDonne');
			$crud->required_fields('nom','tailleMin','idLieu','idType');
            $crud->set_relation('idLieu','lieu','nom');
            $crud->set_relation('idType','typeForfait','nom');
			$crud->set_relation_n_n('idTypeDonne','forfaitDetails','typeDonne','idForfait','idTypeDonne','nom');


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

			
			$crud->set_language($this->session->userdata('crud_language'));
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

			
			$crud->set_language($this->session->userdata('crud_language'));
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

	public function crudTypeDonne()
	{
		try{
			$crud = new grocery_CRUD();

			
			$crud->set_language($this->session->userdata('crud_language'));
			$crud->set_table('typeDonne');
			$crud->set_subject('Type de données');
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
		$data = array('message'=> 'Vous vous êtes déconnecté(e)');
        $this->load->view('bo_login.php',$data);
	}
   
			
}
