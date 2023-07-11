<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PortefeuilleModel extends CI_Model {
    public function getCaisseForProfile($iduser){
        $totalcode=$this->getTotalCode($iduser);
        $totaldepense=$this->getTotalDepense($iduser);
        $solde=$totalcode->totalcode-$totaldepense->montant;
        return $solde;
    }
    public function getTotalCode($iduser){
        $this->db->select("*");
        $this->db->from("v_totalcode");
        $this->db->where("iduser", $iduser);
        $result=$this->db->get();
        $result=$result->result();
        if(count($result)>0){
            return $result[0];
        }
        $result=new stdClass();
        $result->totalcode=0;
        return $result;
    }
    public function getTotalDepense($iduser){
        $this->db->select("*");
        $this->db->from("v_totaldepense");
        $this->db->where("iduser", $iduser);
        $result=$this->db->get();
        $result=$result->result();
        if(count($result)>0){
            return $result[0];
        }
        $result=new stdClass();
        $result->montant=0;
        return $result;
    }
    public function commanderRegime($user, $regime){
        $caisse=$this->getCaisseForProfile($user->iduser);
        $montanttotal=$this->RegimeModel->getMontantTotal($regime);
        $peutAcheter;
        if($caisse>=$montanttotal){
            $peutAcheter=true;
        }else{
            $peutAcheter=false;
        }
        if($peutAcheter===true){
            $array=array(
                'iduser' => $user->iduser,
                'idregime' => $regime->idregime,
                'montant' => $montanttotal,
                'date' => date('Y-m-d')
            );
            $this->db->insert("commanderegime", $array);
        }
        return $peutAcheter;
    }
}

?>