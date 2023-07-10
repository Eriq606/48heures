<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

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
	// public function index()
	// {
	// 	$this->load->view('frontOffice/profile/profileUtilisateur');
	// }	
	
	public function augmenterPoids() {
		$user=$this->session->user;
		$data['user']=$user;
		$profile=$this->ProfileModel->getProfileByUser($user->iduser);
		$genre=$this->ProfileModel->getGenreById($profile->idGenre);
		$data['profile']=$profile;
		$data['genre']=$genre;
		$this->load->view('frontOffice/objectif/augmenterPoids', $data);
	}

    public function diminuerPoids() {
		$user=$this->session->user;
		$data['user']=$user;
		$profile=$this->ProfileModel->getProfileByUser($user->iduser);
		$genre=$this->ProfileModel->getGenreById($profile->idGenre);
		$data['profile']=$profile;
		$data['genre']=$genre;
		$this->load->view('frontOffice/objectif/diminuerPoids', $data);
	}
	public function modifierObjectif(){
		$idobjectif=$this->input->post("idobjectif");
		$poids=$this->input->post("poids");
		$idprofile=$this->input->post("idprofile");
		$idprofileobjectif="null";
		$date=date('Y-m-d');
		$this->ObjectifModel->saveProfileObjectif($idprofileobjectif, $idprofile, $idobjectif, $poids, $date);
		switch($idobjectif){
			case "1":
				redirect("objectif/diminuerPoids");
				break;
			case "2":
				redirect("objectif/augmenterPoids");
				break;
		}
	}
}
