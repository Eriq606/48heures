<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite extends CI_Controller {

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
		$this->load->view('backOffice/activite/createAndList', $data);
	}	

    public function delete($idActivite)
	{
		$user=$this->session->user;
		$data['user']=$user;
		redirect('activite');
	}
	
	public function update($idActivite)
	{
		$user=$this->session->user;
		$data['user']=$user;
		$this->load->view('backOffice/activite/updateActivite', $data);
	}
	
}
