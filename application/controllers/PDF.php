<?php

    defined('BASEPATH') or exit('No direct script access allowed');
    
    class PDF extends CI_Controller{

        public function toPdf(){
            $data['regime'] = $this->PDFModel->getRegime();
            
            $this->load->view('test/test', $data);
        }

        public function content_pdf(){
            require_once(APPPATH . 'libraries/fpdf/fpdf.php');
            $idregime = $this->input->post('idregime');

            $data = array();
            $data['plat'] = $this->PDFModel->getRegimePlat($idregime);
            $data['activite'] = $this->PDFModel->getRegimeActivite($idregime);

            $_SESSION['data'] = $data; 
            $this->load->view('test/pdf');
        }

    }
?>