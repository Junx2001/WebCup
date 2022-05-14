<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Forfait extends CI_Model{

    public function getForfaits(){
        $sql="SELECT * FROM vueForfait";
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }

    public function getForfait($id){
        $sql="SELECT * FROM vueForfait where id='%s'";
        $sql=sprintf($sql,$id);
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row[0];
    }

    public function rechercheForfaits($taille,$prix,$idType,$pays){
        $sql = "SELECT * FROM vueForfait WHERE id not null ";
    	
        if (!empty($taille)) {
            $sql .= " AND ";
            $sql .= "tailleMin >= '" . $taille . "' ";
        }
        if (!empty($prix)) {
            $sql .= " AND ";
            $sql .= " id = (select * from forfait where prix>".$prix." order by prix asc limit 1) ";
            $sql .= " OR id = (select * from forfait where prix<=".$prix." order by prix desc limit 1) ";
        }
        if (!empty($idType)) {
            $sql .= " AND ";
            $sql .= "idType = " . $idType . "";
        }
        if (!empty($pays)) {
            $sql .= " AND ";
            $sql .= "nomLieu = '" . $pays . "'";
        }
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }

    public function getProximite($long,$lat){
        $this->load->model('Fonction');
        $locations = $this->Forfait->getForfaits();
        return $this->Fonction->getProximite($locations,$lat,$long);
    }

     
}

?>