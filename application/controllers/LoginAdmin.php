<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class LoginAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login');
		
	}	

	public function dashboard() {
		redirect('loginAdmin/accueil');
	}
	
	public function login()
	{
		// $this->load->view('frontOffice/accueil');
		$this->load->view('login/loginAdmin');
	}	

	public function accueil()
	{

		$this->load->helper('tableau');
		// $this->load->view('frontOffice/accueil');
		$data['user']=$this->session->user;

		$nbUserActuel = $this->DashboardModel->getNbUtilisateur();
		$objectifs = $this->DashboardModel->getStatObjectif();
		$regimeDominants5 = $this->DashboardModel->getRegimeDominant();
		$etatCaisse = $this->DashboardModel->getCaisseActuelle();

		$data['nbUserActuel'] = number_format($nbUserActuel->nombre, 0, ",", " ");
		$data['objectifs'] = $objectifs;
		$data['regimeDominants5'] = $regimeDominants5;
		$data['etatCaisse'] = number_format($etatCaisse->somme, 2, ",", " ");

		$arrayDescriPourcentageObjectif = getObjectifsArrayDescrPourcentage($objectifs);
		$arrayRegimeNombre = getRegimesArrayDescrNombre($regimeDominants5);

		$data['arrayDescriObjectifs'] = $arrayDescriPourcentageObjectif[0];
		$data['arrayPourcentageObjectifs'] = $arrayDescriPourcentageObjectif[1];

		$data['arrayDescriRegimes'] = $arrayRegimeNombre[0];
		$data['arrayNombreRegimes'] = $arrayRegimeNombre[1];

		$this->load->view('backOffice/accueil', $data);
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
