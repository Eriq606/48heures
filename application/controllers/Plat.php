<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat extends CI_Controller {

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
		$this->load->view('welcome_message');
		
	}	

    public function delete($idplat)
	{
		$user=$this->session->user;
		$data['user']=$user;

		$this->PlatModel->deletePlat($idplat);

		redirect('plat/liste');
	}

	public function toUpdate($idPlat)
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['plat'] = $this->PlatModel->getPlatById($idPlat);
		$data['unites'] = $this->PlatModel->getUnite();

		$this->load->view('backOffice/plat/updatePlat', $data);
	}
	
	public function update()
	{
		$idplat = $this->input->post('idplat');
		$descriPLat = $this->input->post('descriPLat');
		$pu = $this->input->post('pu');
		$idunite = $this->input->post('idunite');

		$this->PlatModel->updatePlat($idplat, $descriPLat, $pu, $idunite);

		redirect('plat/liste');
	}

	public function toCreate()
	{
		$user=$this->session->user;
		$data['user']=$user;
		$data['unites'] = $this->PlatModel->getUnite();
		$this->load->view('backOffice/plat/createPlat', $data);
	}
    
    public function create()
	{
		$data['user']=$this->session->user;

		$descriPlat = $this->input->post('descriPlat');
		$pu = $this->input->post('pu');
		$idunite = $this->input->post('idunite');
		$this->PlatModel->savePlat($descriPlat, $pu, $idunite);
		
		redirect('plat/liste');
	}
    
    public function liste()
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['plats'] = $this->PlatModel->getPlat();

		$this->load->view('backOffice/plat/listePlats', $data);
	}
}
