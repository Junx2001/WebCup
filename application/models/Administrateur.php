<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Administrateur extends CI_Model{

    public function getAdminByCredentials($email, $mdp){
        $sql="SELECT * FROM administrateur WHERE email='%s' AND mdp=sha1('%s')";
        $sql=sprintf($sql,$email,$mdp);
        $query = $this->db->query($sql);
        $row = $query -> result_array();
        return $row;
    }
}

?>