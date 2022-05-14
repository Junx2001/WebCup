<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Paiement extends CI_Model{

    public function getPaiements(){
        $sql="SELECT * FROM paiement";
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }

    public function payerCommande($idCommande,$typeDevise)
    {
        $sql = "INSERT INTO  paiement VALUES(NULL,%d,NOW(),'%s')";
        $sql = sprintf($sql,$idCommande, $typeDevise);
        $this->db->query($sql);
    }

     
}

?>