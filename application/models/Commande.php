<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Commande extends CI_Model{


    public function commander($idUser,$idForfait,$qte){
        $sql="INSERT INTO commande VALUES(null,%d,'%d',NOW(),%d)";
        $sql = sprintf($sql,$qte,$idForfait,$idUser);
        $this->db->query($sql);
        
    }

    public function getCommandeByIdUser($idUser){
        $sql="SELECT * FROM commande WHERE idUser = '%d'";
        $sql = sprintf($sql,$idUser);
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }


    public function getCommandeNotPaidByIdUser($idUser){
        $sql="SELECT * FROM commande WHERE idUser = '%d' and id NOT IN (SELECT idCommande FROM Paiement)";
        $sql = sprintf($sql,$idUser);
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }

    public function getCommandeAlreadyPaidByIdUser($idUser){
        $sql="SELECT * FROM commande WHERE idUser = '%d' and id IN (SELECT idCommande FROM Paiement)";
        $sql = sprintf($sql,$idUser);
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }



   

     
}

?>