<?php

    defined('BASEPATH') or exit('No direct script access allowed');
    
    class PDF extends CI_Controller{

        public function toPdf(){
            $data['regime'] = $this->PDFModel->getRegime();
            
            $this->load->view('test/test', $data);
        }

        public function Regime_PDF(){
            require_once(APPPATH . 'libraries/fpdf/fpdf.php');
            $idregime = $this->input->post('idregime');

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
                $pdf->Cell(30, 8, $plat->pu, 0, 0, 'R');
                $pdf->Cell(10, 8, 'Ar', 0, 1, 'L');
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

            $pdf->SetFont('Arial', 'BU', 14);
            $pdf->Cell(125,15,'Montant total :',0, 0);
            $pdf->SetFont('Arial', '', 14);
            $pdf->Cell(15, 15, '1000', 0, 0, 'R');
            $pdf->Cell(10, 15, 'Ar', 0, 1, 'L');

            $pdf->Output('Regime.pdf', 'I');          
        }
    }
?>