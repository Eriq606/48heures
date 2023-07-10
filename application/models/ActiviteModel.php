<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActiviteModel extends CI_Model {
    public function getActiviteById($idactivite){
        $this->db->select("*");
        $this->db->from("activite");
        $this->db->where("idactivite", $idactivite);
        $result=$this->db->get();
        $result=$result->result();
        return $result[0];
    }
}
?>