<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlatModel extends CI_Model {
    public function getPlatById($idplat){
        $this->db->select("*");
        $this->db->from("plat");
        $this->db->where("idplat", $idplat);
        $result=$this->db->get();
        $result=$result->result();
        return $result[0];
    }

    public function savePlat($descriPLat, $pu, $idunite){
        $data = array(
            'descriPlat' => $descriPLat,
            'pu' => $pu,
            'idunite' => $idunite
        );
    
        $this->db->insert('plat', $data);
    }

    public function getPlat(){
        $this->db->select('*');
        $this->db->from('v_plat');
        
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }

        return [];
    }

    public function updatePlat($idplat, $descriPLat, $pu, $idunite) {
        $data = array(
            'descriPlat' => $descriPLat,
            'pu' => $pu,
            'idunite' => $idunite
        );    
          
        $this->db->where('idplat', $idplat);
        $this->db->update('plat', $data);        
    }

    public function deletePlat($idplat) {
        $this->db->where('idplat', $idplat);
        $this->db->delete('plat');
    }
}
?>