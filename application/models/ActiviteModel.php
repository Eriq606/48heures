<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActiviteModel extends CI_Model {
    public function getActiviteById($idactivite){
        $this->db->select("*");
        $this->db->from("activite");
        $this->db->where("idactivite", $idactivite);
        $result=$this->db->get();
        $result=$result->result();
        return $result[0];
    }

    public function saveActvite($descriActivite){
        $data = array(
            'descriActivite' => $descriActivite
        );
    
        $this->db->insert('activite', $data);
    }

    public function getActivite(){
        $this->db->select('*');
        $this->db->from('activite');
        
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }

        return [];
    }

    public function updateActivite($idactivite, $descriActivite) {
        $data = array(
            'descriActivite' => $descriActivite
        );    
          
        $this->db->where('idactivite', $idactivite);
        $this->db->update('activite', $data);        
    }

    public function deleteActivite($idactivite) {
        $this->db->where('idactivite', $idactivite);
        $this->db->delete('activite');
    }
}
?>