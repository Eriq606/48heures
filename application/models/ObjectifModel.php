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
        $this->db->insert('profileObjectif', $toinsert);
    }
    public function getDernierObjectif($idprofile){
        $query="select * from profileObjectif where idprofile=%s order by date desc limit 1";
        $query=sprintf($query, $idprofile);
        $resultset=$this->db->query($query);
        $result=$resultset->result();
        if(count($result)>0){
            return $result[0];
        }
        return null;
    }
    public function getObjectifs(){
        $this->db->select("*");
        $this->db->from("objectif");
        $result=$this->db->get();
        $result=$result->result();
        return $result;
    }
}

?>