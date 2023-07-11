<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {

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
		$user=$this->session->user;
		$data['user']=$user;
		$profile=$this->ProfileModel->getProfileByUser($user->iduser);
		$dernierObjectif=$this->ObjectifModel->getDernierObjectif($profile->idprofile);
		$marge=$this->input->post("marge");
		if(!isset($marge)){
			$marge=5;
		}
		$regimes=$this->RegimeModel->getRegimeCorrespondant($marge, $dernierObjectif);
		$data['profile']=$profile;
		$data['objectif']=$dernierObjectif;
		$data['regimes']=$regimes;
		$data['marge']=$marge;
		$this->load->view('frontOffice/regime/selectionRegimes', $data);
	}	

	public function delete($idRegime)
	{
		$user=$this->session->user;
		$data['user']=$user;
		redirect('regime/liste');
	}
	
	public function update($idRegime)
	{
		$user=$this->session->user;
		$data['user']=$user;
		$this->load->view('backOffice/regime/updateRegime', $data);
	}

	public function liste()
	{
		$user=$this->session->user;
		$data['user']=$user;
		$this->load->view('backOffice/regime/listeRegimes', $data);
	}
	
	public function modifierMarge(){

	}

	public function create()
	{
		$data['user']=$this->session->user;
		$this->load->view('backOffice/regime/createRegime', $data);
		
	}	

}
