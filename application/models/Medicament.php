<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Medicament extends CI_Model{

    // public function checkLogin($email, $mdp){
    //     $sql="SELECT * FROM user WHERE mail='%s' AND mdp=sha1('%s')";
    //     $sql=sprintf($sql,$email,$mdp);
    //     $query = $this->db->query($sql);
    //     $row = $query -> result_array();
    //     return $row;
    // }
    public function test(){
        $sql="SELECT * FROM medicament";
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }
}

?>