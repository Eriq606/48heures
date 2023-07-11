<?php

    class PDF extends FPDF
    {

    }

    $pdf = new PDF();
    
    $pdf->SetFont('Arial');
    $pdf->SetTitle('PDF Rebeka');
    $pdf->SetFont('','',12);
    $pdf->AddPage();
    $pdf->Output();
?>