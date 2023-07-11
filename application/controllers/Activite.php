<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite extends CI_Controller {
	
	public function index()
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['activites'] = $this->ActiviteModel->getActivite();

		$this->load->view('backOffice/activite/createAndList', $data);
	}	

	public function create()
	{
		$descriActivite = $this->input->post('descriActivite');
		$this->ActiviteModel->saveActvite($descriActivite);
		
		redirect('activite');
	}

    public function delete($idActivite)
	{
		$user=$this->session->user;
		$data['user']=$user;
		
		$this->ActiviteModel->deleteActivite($idActivite);

		redirect('activite');
	}
	
	public function toUpdate($idActivite)
	{
		$user=$this->session->user;
		$data['user']=$user;

		$data['activite'] = $this->ActiviteModel->getActiviteById($idActivite);

		$this->load->view('backOffice/activite/updateActivite', $data);
	}

	public function update()
	{
		$idActivite = $this->input->post('idActivite');
		$descriActivite = $this->input->post('descriActivite');
		$this->ActiviteModel->updateActivite($idActivite, $descriActivite);

		redirect('activite');     
	}
	
}
