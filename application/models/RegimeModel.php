<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeModel extends CI_Model {
    public function getRegimeCorrespondant($marge, $objectif){
        $query="select * from regime where poids between %s and %s and idobjectif=%s";
        $query=sprintf($query, $objectif->poids-$marge, $objectif->poids+$marge, $objectif->idobjectif);
        $resultset=$this->db->query($query);
        $result=$resultset->result();
        foreach($result as $rs){
            $rs->regimeplats=$this->getRegimePlatByRegime($rs->idregime);
            $rs->regimeActivite=$this->getRegimeActiviteByRegime($rs->idregime);
        }
        return $result;
    }
    public function getRegimePlatByRegime($idregime){
        $this->db->select("*");
        $this->db->from("regimePlat");
        $this->db->where("idregime", $idregime);
        $result=$this->db->get();
        $result=$result->result();
        foreach($result as $rs){
            $rs->plat=$this->PlatModel->getPlatById($rs->idplat);
        }
        return $result;
    }
    public function getRegimeActiviteByRegime($idregime){
        $this->db->select("*");
        $this->db->from("regimeActivite");
        $this->db->where("idregime", $idregime);
        $result=$this->db->get();
        $result=$result->result();
        foreach($result as $rs){
            $rs->activite=$this->ActiviteModel->getActiviteById($rs->idactivite);
        }
        return $result;
    }
    public function getMontantTotal($regime){
        $somme=0;
        foreach($regime->regimeplats as $plat){
            $somme+=$plat->plat->pu*$plat->quantite*$regime->duree;
        }
        return $somme;
    }
    public function getRegimeById($idregime){
        $this->db->select("*");
        $this->db->from("regime");
        $this->db->where("idregime", $idregime);
        $result=$this->db->get();
        $result=$result->result();
        $result[0]->regimeplats=$this->getRegimePlatByRegime($result[0]->idregime);
        $result[0]->regimeActivite=$this->getRegimeActiviteByRegime($result[0]->idregime);
        return $result[0];
    }
    public function verifierSiPeutAcheter($user, $regime){
        $caisse=$this->PortefeuilleModel->getCaisseForProfile($user->iduser);
        $montanttotal=$this->getMontantTotal($regime);
        if($caisse<$montanttotal){
            return false;
        }
        return true;
    }
}

?>