<?php require("fpdf.php");

class PDF extends FPDF{

}

$produtos = [[1,"Produto 1"],[1,"Produto 2"],[1,"Produto 3"]];

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 9);
$pdf->Image("../imagens/logo.jpg",10,10,49);
$pdf->Cell(49,48,"  ",1);
$pdf->Cell(141,5,"Hello World",1, $ln=1,$align="C");
$pdf->SetFont("Arial", "B", 32);
$pdf->Cell(49,45,"  ",0);
$pdf->Cell(141,43.5,"Hello World",1,);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->Cell(95,5,$produtos[0][0],1);
$pdf->Cell(95,5,$produtos[0][1],1);
$pdf->Ln();
$pdf->Cell(95,5,$produtos[1][0],1);
$pdf->Cell(95,5,$produtos[1][1],1);
$pdf->Ln();
$pdf->Cell(95,5,$produtos[2][0],1);
$pdf->Cell(95,5,$produtos[2][1],1);
$pdf->Ln();
$pdf->Output('F', 'teste.pdf');

