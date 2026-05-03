<?php

require("fpdf186/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();

// Titulo
$pdf->SetFont("Arial", "B", 18);

$pdf->SetTextColor(255,0,0,0);
$pdf->Cell(0,10, utf8_decode("Relatório de clientes"), 1,1,'C');

// Espaço
$pdf->Ln(10);

// Conteúdo
$pdf->SetFont("Arial", '', 12);
$pdf->SetTextColor(0,0,0,0);

$dadosPessoa = array(utf8_decode('Nome: João Silva'),utf8_decode("Email: joao@email.com"),utf8_decode("Telefone: (11) 9999-9999"));

$pdf->Cell(0,10,$dadosPessoa[0],'RTL',1);
$pdf->Cell(0,10,$dadosPessoa[1], 'RL',1);
$pdf->Cell(0,10,$dadosPessoa[2],'RBL',1);

$pdf->Output('F',"arquivos/cliente_data.pdf");






