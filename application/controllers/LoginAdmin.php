<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login');
		
	}	
	
	public function login()
	{
		// $this->load->view('frontOffice/accueil');
		$this->load->view('login/loginAdmin');
	}	

	public function acceuil()
	{
		// $this->load->view('frontOffice/accueil');
		$this->load->view('backOffice/accueil');
	}	

	public function verifLogin() {
        $username = $this->input->post('nom');
        $password = $this->input->post('mdp');
        
        $resultat = $this->LoginModel->verifylogin($username, $password);
        
        if (!empty($resultat)) {
			if($resultat->is_admin == 1) {
				$this->session->set_userdata("user", $resultat);
				redirect('loginAdmin/accueil');
			}
			$this->load->view('login/login');
        } else {
            // echo "Identifiants incorrects";
			$this->load->view('login/login');
        }
    }

	public function toInscription() {
		$this->load->view('login/inscription');
	}

	public function inscription() {
        $nom = $this->input->post('nom');
        $mdp = $this->input->post('mdp');
        
        $resultat = $this->LoginModel->inscription($nom, $mdp);
        
        $this->load->view('frontOffice/accueil');
    }

}
