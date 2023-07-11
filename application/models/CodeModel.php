<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeModel extends CI_Model {
    public function getAllCode(){
        $this->db->select("*");
        $this->db->from("code");
        $result=$this->db->get();
        $result=$result->result();
        return $result;
    }
    public function enregistrerCodeUser($iduser, $code, $date){
        $array=array(
            'identreecode' => 'null',
            'iduser' => $iduser,
            'date' => $date,
            'code' => $code->id,
            'idetat' => 1
        );
        $this->db->insert("entreecode", $array);
    }
}

?>
