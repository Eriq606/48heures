<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PortefeuilleModel extends CI_Model {
    public function getCaisseForProfile($iduser){
        $this->db->select("*");
        $this->db->from("v_solde");
        $this->db->where("iduser", $iduser);
        $result=$this->db->get();
        $result=$result->result();
        if(count($result)>0){
            return $result[0];
        }
        $result=new stdClass();
        $result->solde=0;
        return $result;
    }
}

?>