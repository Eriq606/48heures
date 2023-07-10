<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model {

    public function getGenre(){
        $this->db->select('*');
        $this->db->from('genre');
        
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }

        return [];
    }

    public function getUser(){
        $this->db->select('*');
        $this->db->from('user');
        
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            return $resultat;
        }

        return [];
    }

    public function modifierProfile($iduser, $idgenre, $taille, $poids){
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->where('iduser', $iduser);
        
        $query = $this->db->get();
        $resultat = $query->result();

        if(count($resultat) > 0) {
            $this->updateProfile($iduser, $idgenre, $taille, $poids);
        }
        else {
            $this->saveProfile($iduser, $idgenre, $taille, $poids);
        }

        return 0;
    }

    public function updateProfile($iduser, $idgenre, $taille, $poids) {
        $data = array(
            'idgenre' => $idgenre,
            'taille' => $taille,
            'poids' => $poids
        );      
          
        $this->db->where('iduser', $iduser);
        $this->db->update('profile', $data);        
    }

    public function saveProfile($iduser, $idgenre, $taille, $poids) {
        $data = array(
            'idprofile' => 'null',
            'iduser' => $iduser,
            'idgenre' => $idgenre,
            'taille' => $taille,
            'poids' => $poids
        );        

        $this->db->insert('profile', $data);        
    }

}

?>