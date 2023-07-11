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

    public function getRegime(){
        $this->db->select("*");
        $this->db->from("regime");
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }
    }

    public function getObjectif(){
        $this->db->select("*");
        $this->db->from("objectif");
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }
    }

    public function getLastRegime(){
        $this->db->select("*");
        $this->db->from("regime");
        $this->db->order_by('idregime', 'DESC');
        $result=$this->db->get();
        $result=$result->result();
        return $result[0];
    }
    
    public function updateRegime($idregime, $descriRegime, $duree, $idobjectif, $poids) {
        $data = array(
            'descriRegime' => $descriRegime,
            'duree' => $duree,
            'idobjectif' => $idobjectif,
            'poids' => $poids
        );    
          
        $this->db->where('idregime', $idregime);
        $this->db->update('regime', $data);        
    }

    public function saveRegime($descriRegime, $duree, $idobjectif, $poids){
        $data = array(
            'descriRegime' => $descriRegime,
            'duree' => $duree,
            'idobjectif' => $idobjectif,
            'poids' => $poids
        );   
    
        $this->db->insert('regime', $data);
    }

    public function saveRegimeActivite($idregime, $idactivite, $quantite){
        $data = array(
            'idregime' => $idregime,
            'idactivite' => $idactivite,
            'quantite' => $quantite
        );   
    
        $this->db->insert('regimeActivite', $data);
    }

    public function saveRegimePlat($idregime, $plat, $quantite){
        $data = array(
            'idregime' => $idregime,
            'plat' => $plat,
            'quantite' => $quantite
        );   
    
        $this->db->insert('regimePlat', $data);
    }

    public function deleteRegime($idregime) {
        $this->db->where('idregime', $idregime);
        $this->db->delete('regime');
    }
}

?>