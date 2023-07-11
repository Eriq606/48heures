<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PDFModel extends CI_Model {

    public function getRegime(){
        $this->db->select('*');
        $this->db->from('regime');

        $query = $this->db->get();
        $resultat = $query->result();
        return $resultat;
    }

    public function getRegimeById($idregime){
        $this->db->select('*');
        $this->db->from('regime');
        $this->db->where('idregime', $idregime);

        $query = $this->db->get();
        $resultat = $query->result();
        if(count($resultat) > 0) {
            return $resultat[0];
        }
        return [];
    }

    public function getRegimePlat($idregime){
        $this->db->select('*');
        $this->db->from('v_regimeplat');
        $this->db->where('idregime', $idregime);

        $query = $this->db->get();
        $resultat = $query->result();
        if(count($resultat) > 0) {
            return $resultat;
        }
        return [];
    }
    
    public function getRegimeActivite($idregime){
        $this->db->select('*');
        $this->db->from('v_regimeactvite');
        $this->db->where('idregime', $idregime);

        $query = $this->db->get();
        $resultat = $query->result();
        if(count($resultat) > 0) {
            return $resultat;
        }
        return [];
    }
}

?>
