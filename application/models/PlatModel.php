<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlatModel extends CI_Model {
    public function getPlatById($idplat){
        $this->db->select("*");
        $this->db->from("v_regimeplat");
        $this->db->where("idplat", $idplat);
        $result=$this->db->get();
        $result=$result->result();
        return $result[0];
    }
}
?>