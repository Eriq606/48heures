<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeModel extends CI_Model {
    public function getRegimeCorrespondant($marge, $objectif){
        $query="select * from regime where poids between %s and %s and idobjectif=%s";
        $query=sprintf($query, $objectif->poids-$marge, $objectif->poids+$marge, $objectif->idobjectif);
        $resultset=$this->db->query($query);
        $result=$resultset->result();
        foreach($result as $rs){
            $rs->regimeplats=getRegimePlatByRegime($rs->idregime);
            $rs->regimeActivite=getRegimeActiviteByRegime($rs->idregime);
        }
        return $result;
    }
    public function getRegimePlatByRegime($idregime){
        $this->db->select("*");
        $this->db->from("regimeplat");
        $this->db->where("idregime", $idregime);
        $result=$this->db->get();
        foreach($result as $rs){
            $rs->plat=$this->PlatModel->getPlatById($rs->idplat);
        }
        return $result;
    }
    public function getRegimeActiviteByRegime($idregime){
        $this->db->select("*");
        $this->db->from("regimeactivite");
        $this->db->where("idregime", $idregime);
        $result=$this->db->get();
        foreach($result as $rs){
            $rs->activite=$this->ActiviteModel->getActiviteById($rs->idactivite);
        }
        return $result;
    }
}

?>