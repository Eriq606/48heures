<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

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
		$codes=$this->CodeModel->getAllCode();
		$data['codes']=$codes;
		$caisse=$this->PortefeuilleModel->getCaisseForProfile($user->iduser);
		$data['caisse']=$caisse;
		$this->load->view('frontOffice/code/recharge', $data);
	}	

	public function toValidate() {
		$user=$this->session->user;
		$data['user']=$user;
		$entreecode=$this->CodeModel->getAllEntreeCode();
		$data['entrees']=$entreecode;
		$this->load->view('backOffice/code/validation', $data);
	}

	public function validate($idCode) {
		$user=$this->session->user;
		$data['user']=$user;
		$etat=11;
		$this->CodeModel->updateEntreeCode($idCode, $etat);
		redirect('code/toValidate');
	}
	public function entreeCode(){
		$codestr=$this->input->post('codestr');
		$code=$this->CodeModel->getCodeByStr($codestr);
		if($code===false){
			redirect('code');
		}
		$user=$this->session->user;
		$date=date('Y-m-d');
		$this->CodeModel->enregistrerCodeUser($user->iduser, $code, $date);
		redirect('code');
	}
}
