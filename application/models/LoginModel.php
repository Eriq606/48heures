<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model {
    
    public function verifylogin($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('nom', $username);
        $this->db->where('mdp', $password);

        $query = $this->db->get();
        $resultat = $query->result();
        if(count($resultat) > 0) {
            return $resultat[0];
        }
        // throw new Exception("Echec authentification"); 
        return [];
    }

    public function inscription($nomUser, $mdp) {
        $data = array(
            'nom' => $nomUser,
            'mdp' => $mdp,
            'is_admin' => 0
        );
    
        $this->db->insert('user', $data);
    }

}

?>
