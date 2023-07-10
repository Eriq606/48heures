<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ObjectifModel extends CI_Model {
    public function saveProfileObjectif($idprofileobjectif, $idprofile, $idobjectif, $poids, $date){
        $toinsert=array(
            'idprofileObjectif' => $idprofileobjectif,
            'idprofile' => $idprofile,
            'idobjectif' => $idobjectif,
            'poids' => $poids,
            'date' => $date
        );
        $this->db->insert('profileobjectif', $toinsert);
    }
    public function getDernierObjectif($idprofile){
        $this->db->select("*");
        $this->db->from("profileobjectif");
        $this->db->where("idprofile", $idprofile);
        
    }
}

?>