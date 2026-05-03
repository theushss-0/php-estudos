<?php require("./fpdf186/fpdf.php");


class PDF extends FPDF{

    function  Header(){

        $this->SetFont("Arial", "B", 11);
        $this->Cell(0,10,utf8_decode("Dados do Orcamento"));

    }
    
    function LoadData($file){

        $lines = file($file);
        $data = array();
        foreach($line as $lines){
            $data[] = explode(";",trim($line));
        }
        return $data;
    }


    function CabecalhoOrcamento($dados_empresa){

    }


}


$pdf =  new PDF();
$pdf->AddPage();

$pdf->Output("F", "orcamento_empresa.pdf");
