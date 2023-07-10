<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlatModel extends CI_Model {
    public function getPlatById($idplat){
        $this->db->select("*");
        $this->db->from("plat");
        $this->db->where("idplat", $idplat);
        $result=$this->db->get();
        return $result;
    }
}
?>