<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['user']=$this->session->user;
		$genre = $this->ProfileModel->getGenre();    
		$data['genre'] = $genre;
		$this->load->view('frontOffice/profile/profileUtilisateur', $data);
	}	

	public function init()
	{
		$data['user']=$this->session->user;
		$genre = $this->ProfileModel->getGenre();    
		$data['genre'] = $genre;
		$this->load->view('frontOffice/profile/profileInit', $data);
	}	

	public function toProfile(){
        $genre = $this->ProfileModel->getGenre();        
        $user = $this->ProfileModel->getUser(); // test fa tsy ilaina

        $data['genre'] = $genre;
        $data['user'] = $user;

		$this->load->view('test/testProfile', $data);
    }

	public function modifierProfile() {
        $iduser = $this->input->post('iduser');
        $idgenre = $this->input->post('idgenre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');
        
        $resultat = $this->ProfileModel->modifierProfile($iduser, $idgenre, $taille, $poids);
		redirect('profile');

		// $this->load->view('frontOffice/accueil');
    }
	
	public function objectif() {
		$data['user']=$this->session->user;
		$this->load->view('frontOffice/objectif/choixObjectifs', $data);
	}
}
