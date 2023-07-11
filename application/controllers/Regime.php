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
		$data['erreur']=str_replace(['_']," ",$erreur);
		$this->load->view('frontOffice/regime/selectionRegimes', $data);
	}
	public function commander($idregime){
		require_once(APPPATH . 'libraries/fpdf/fpdf.php');
		$user=$this->session->user;
		$regime=$this->RegimeModel->getRegimeById($idregime);
		$commande=$this->PortefeuilleModel->commanderRegime($user, $regime);
		
		if($commande===false){			
			redirect('regime/index/Le_regime_est_trop_cher');
		}else{
			redirect('regime/toPDF/'.$idregime);
		} 
	}

	public function toPdf($idregime){
		$this->load->view('backOffice/regime/listeRegimes', $data);
	}

	public function voirPdf($idregime){
		$montant = 0;
		$data = array();
		$plats = $this->PDFModel->getRegimePlat($idregime);
		$activites = $this->PDFModel->getRegimeActivite($idregime);

		$pdf = new FPDF();
		$pdf->AddPage();

		$pdf->SetFont('Arial', 'BI', 24);
		$pdf->Cell(0, 20, $plats[0]->descriRegime, 0, 5, 'C');
		$pdf->SetFont('Arial', 'BU', 14);
		
		$pdf->Cell(0,15,'Menus :',0, 1);
		$pdf->SetFont('Arial', '', 14);
		foreach($plats as $plat){
			$pdf->Cell(125, 8, $plat->descriPlat, 0, 0, 'L');
			$pdf->Cell(15, 8, $plat->quantite, 0, 0, 'R');
			$pdf->Cell(10, 8, $plat->descriUnite, 0, 0, 'L');
			$pdf->Cell(30, 8, number_format($plat->pu, 2, ",", " "), 0, 0, 'R');
			$pdf->Cell(10, 8, 'Ar', 0, 1, 'L');
			$montant = $montant + ( $plat->pu * $plat->quantite );
		}

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(0,15,'Activite(s) sportive(s) :',0, 1);
		$pdf->SetFont('Arial', '', 14);
		foreach($activites as $activite){
			$pdf->Cell(125, 8, $activite->descriActivite, 0, 0, 'L');
			$pdf->Cell(15, 8, $activite->quantite, 0, 0, 'R');
			$pdf->Cell(10, 8, 'fois', 0, 1, 'L');
		}

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(125,15,'Duree :',0, 0);
		$pdf->SetFont('Arial', '', 14);
		$pdf->Cell(15, 15, $plats[0]->duree, 0, 0, 'R');
		$pdf->Cell(10, 15, 'jour(s)', 0, 1, 'L');

		$montant = $montant * $plats[0]->duree;

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(125,15,'Montant total :',0, 0);
		$pdf->SetFont('Arial', '', 14);
		$pdf->Cell(15, 15, number_format($montant, 2, ",", " "), 0, 0, 'R');
		$pdf->Cell(10, 15, 'Ar', 0, 1, 'L');

		$pdf->Output('Regime.pdf', 'I');  
	}

	public function telechargerPdf($idregime){
		$montant = 0;
		$data = array();
		$plats = $this->PDFModel->getRegimePlat($idregime);
		$activites = $this->PDFModel->getRegimeActivite($idregime);

		$pdf = new FPDF();
		$pdf->AddPage();

		$pdf->SetFont('Arial', 'BI', 24);
		$pdf->Cell(0, 20, $plats[0]->descriRegime, 0, 5, 'C');
		$pdf->SetFont('Arial', 'BU', 14);
		
		$pdf->Cell(0,15,'Menus :',0, 1);
		$pdf->SetFont('Arial', '', 14);
		foreach($plats as $plat){
			$pdf->Cell(125, 8, $plat->descriPlat, 0, 0, 'L');
			$pdf->Cell(15, 8, $plat->quantite, 0, 0, 'R');
			$pdf->Cell(10, 8, $plat->descriUnite, 0, 0, 'L');
			$pdf->Cell(30, 8, number_format($plat->pu, 2, ",", " "), 0, 0, 'R');
			$pdf->Cell(10, 8, 'Ar', 0, 1, 'L');
			$montant = $montant + ( $plat->pu * $plat->quantite );
		}

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(0,15,'Activite(s) sportive(s) :',0, 1);
		$pdf->SetFont('Arial', '', 14);
		foreach($activites as $activite){
			$pdf->Cell(125, 8, $activite->descriActivite, 0, 0, 'L');
			$pdf->Cell(15, 8, $activite->quantite, 0, 0, 'R');
			$pdf->Cell(10, 8, 'fois', 0, 1, 'L');
		}

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(125,15,'Duree :',0, 0);
		$pdf->SetFont('Arial', '', 14);
		$pdf->Cell(15, 15, $plats[0]->duree, 0, 0, 'R');
		$pdf->Cell(10, 15, 'jour(s)', 0, 1, 'L');

		$montant = $montant * $plats[0]->duree;

		$pdf->SetFont('Arial', 'BU', 14);
		$pdf->Cell(125,15,'Montant total :',0, 0);
		$pdf->SetFont('Arial', '', 14);
		$pdf->Cell(15, 15, number_format($montant, 2, ",", " "), 0, 0, 'R');
		$pdf->Cell(10, 15, 'Ar', 0, 1, 'L');

		$pdf->Output('Regime.pdf', 'D');  
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
		$data['objectifs'] = $this->ObjectifModel->getObjectifs();
		$this->load->view('backOffice/regime/createRegime', $data);		
	}	
	public function toCreate(){
		$duree=$this->input->post('duree');
		$poids=$this->input->post('poids');
		$objectif=$this->input->post('optionsRadios');
		$activites=$this->input->post('activite');
		$plats=$this->input->post('plat');
		if(!isset($plats)||!isset($activites)){
			redirect("regime/create");
		}
		$quantites=[];
		foreach($plats as $p){
			if($this->input->post('quantite'.$p)>0){
				array_push($quantites, $this->input->post('quantite'.$p));
			}
		}
		$frequences=[];
		foreach($activites as $a){
			if($this->input->post('frequence'.$a)>0){
				array_push($frequences, $this->input->post('frequence'.$a));
			}
		}
		
	}
}
