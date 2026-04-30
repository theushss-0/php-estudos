<?php require("fpdf.php");

class PDF extends FPDF{

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 32);
$pdf->Cell(190,50,"Hello World",1,$ln=2, $align="C");
$pdf->Output('F', 'teste.pdf');

