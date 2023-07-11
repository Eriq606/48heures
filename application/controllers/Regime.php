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
	public function index($erreur="")
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
		$caisse=$this->PortefeuilleModel->getCaisseForProfile($user->iduser);
		$data['caisse']=number_format($caisse, 2, ",", " ");
		$data['profile']=$profile;
		$data['objectif']=$dernierObjectif;
		$data['regimes']=$regimes;
		$data['marge']=$marge;
		$data['erreur']=$erreur;
		$this->load->view('frontOffice/regime/selectionRegimes', $data);
	}
	public function commander($idregime){
		$user=$this->session->user;
		$regime=$this->RegimeModel->getRegimeById($idregime);
		$commande=$this->PortefeuilleModel->commanderRegime($user, $regime);
		if($commande===false){
			redirect('regime/index/Le_regime_est_trop_cher');
		}else{
			redirect('regime');
		}
	}

	public function delete($idRegime)
	{
		$user=$this->session->user;
		$data['user']=$user;
		
		$this->RegimeModel->deleteRegime($idRegime);
		redirect('regime/liste');
	}
	
	public function toUpdate($idRegime)
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['regime'] = $this->RegimeModel->getRegimeById($idRegime);
		$data['objectifs'] = $this->RegimeModel->getObjectif();
		$this->load->view('backOffice/regime/updateRegime', $data);
	}

	public function update()
	{
		$idregime=$this->input->post("idregime");
		$descriRegime=$this->input->post("descriRegime");
		$duree=$this->input->post("duree");
		$poids=$this->input->post("poids");
		$idobjectif=$this->input->post("idobjectif");

		$this->RegimeModel->updateRegime($idregime, $descriRegime, $duree, $idobjectif, $poids);
		redirect('regime/liste');
	}

	public function liste()
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['regimes'] = $this->RegimeModel->getRegime();

		$this->load->view('backOffice/regime/listeRegimes', $data);
	}
	
	public function modifierMarge(){

	}

	public function create()
	{
		$data['user']=$this->session->user;
		$data['plats'] = $this->PlatModel->getPlat();
		$data['activites'] = $this->ActiviteModel->getActivite();
		$this->load->view('backOffice/regime/createRegime', $data);		
	}	

}
