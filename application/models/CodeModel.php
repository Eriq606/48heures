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
        $dejaPris=$this->verifyCodeDejaPris($code);
        if($dejaPris){
            return false;
        }
        $array=array(
            'identreecode' => 'null',
            'iduser' => $iduser,
            'date' => $date,
            'idcode' => $code->idcode,
            'idetat' => 1
        );
        $this->db->insert("entreecode", $array);
        return true;
    }
    public function getCodeByStr($codestr){
        $query="select * from code where descriCode='%s'";
        $query=sprintf($query, $codestr);
        $result=$this->db->query($query);
        $result=$result->result();
        if(count($result)>0){
            return $result[0];
        }
        return false;
    }
    public function getAllEntreeCode(){
        $this->db->select("*");
        $this->db->from("v_code");
        $result=$this->db->get();
        $result=$result->result();
        foreach($result as $rs){
            switch($rs->idetat){
                case 1:
                    $rs->html="";
                    break;
                default:
                    $rs->html="style='display:none'";
            }
        }
        return $result;
    }
    public function updateEntreeCode($identreecode, $idetat){
        $array=array(
            'idetat' => $idetat
        );
        $this->db->where("identreecode", $identreecode);
        $this->db->update("entreecode", $array);
    }
    public function verifyCodeDejaPris($code){
        $this->db->select("*");
        $this->db->from("entreecode");
        $this->db->where("idcode", $code->idcode);
        $result=$this->db->get();
        $result=$result->result();
        foreach($result as $rs){
            if($rs->idetat>=11){
                return true;
            }
        }
        return false;
    }
}

?>
