<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    public function getNbUtilisateur(){
        $this->db->select("nombre");
        $this->db->from("v_nbuser");
        $result=$this->db->get();
        $result=$result->result();
        if(count($result)>0){
            $result[0];
        }
        return 0;
    }
    public function getStatObjectif(){
        $this->db->select("*");
        $this->db->from("v_objectifstat");
        $result=$this->db->get();
        $result=$result->result();
        return $result;
    }
    public function getRegimeDominant(){
        $query="select * from v_nbcommanderegime order by nombre desc limit 5";
        $result=$this->db->query($query);
        $result=$result->result();
        return $result;
    }
    public function getCaisseActuelle(){
        $this->db->select("somme");
        $this->db->from("v_caisse");
        $result=$this->db->get();
        $result=$result->result();
        if(count($result)>0){
            $result[0];
        }
        return 0;
    }
}

?>