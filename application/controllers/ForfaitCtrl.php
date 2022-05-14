<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForfaitCtrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

	}
	
	public function index(){
		redirect('ForfaitCtrl/allForfaits');
	}

    // liste tous les forfaits
    public function allForfaits(){
        $this->load->model('Forfait');
        $data = array(
            'view' => 'listeForfait',
            'forfaits' => $this->Forfait->getForfaits()
        );
    }

     // fiche d'un forfait
     public function ficheForfait(){
        $id = $this->input->get('id');
        $this->load->model('Forfait');
        $data = array(
            'view' => 'ficheForfait',
            'fiche' => $this->Forfait->getForfait($id)
        );
    }

    // liste des résultats de recherche
    public function recherche(){
        $taille = $this->input->get('taille');
        $prix = $this->input->get('prix');
        $idType = $this->input->get('idType');
        $pays = $this->input->get('pays');

        $this->load->model('Forfait');
        $data = array(
            'view' => 'listeForfait',
            'forfaits' => $this->Forfait->rechercheForfaits($taille,$prix,$idType,$pays)
        );
    }

    // le dépôt le plus proche d'une coordonnée
    public function suggestionProximite(){
        $long = $this->input->get('longitude');
        $lat = $this->input->get('latitude');
        $this->load->model('Forfait');
        $data = array(
            'view' => 'listeForfait',
            'forfaits' => $this->Forfait->getProximite($long,$lat)
        );
        
    }
			
}
