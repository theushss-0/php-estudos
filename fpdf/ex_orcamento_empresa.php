<?php require("./fpdf186/fpdf.php");

class PDF extends FPDF{

    public $ultimaPagina = false;
    public $totalPedido = 0;

    public $empresa = [
        'nome' => 'Empresa Exemplo LTDA',
        'cnpj' => '12.345.678/0001-10',
        'endereco' => 'Rua Exemplo, 123 - Centro',
        'telefone' => '(11) 99999-9999'
    ];

    public $pedido = [
        'numero' => '12345',
        'data' => '11/06/2026',
        'cliente' => 'João da Silva'
    ];

    // CABEÇALHO
    function Header(){

        $this->SetFillColor(255, 255, 255);
        $this->Rect(0,0,210,297,'F');


        $this->Image('imagens/php-logo.jpg', 15, 12, 30);

        $y = 15;

        $this->SetXY(70, $y);
        $this->dados_empresa();

        $this->SetXY(150, $y);
        $this->dados_pedido();

        $this->Ln(20);
        //$this->Line(10, 45, 200, 45);
        
    }

    function LerArquivo($file){
        $lines = file($file);
        $dados = [];
        foreach($lines as $line){
            $dados[] = explode(",", $line); 
        }
        return $dados;
    }

    function dados_empresa(){

        $this->SetFont('Arial','B',14);
        $this->Cell(80,7,$this->empresa['nome'],0,1);

        $this->SetX(70);

        $this->SetFont('Arial', '', 12);

        $info_empresa = $this->empresa['cnpj']  .  "\n" . 
                        $this->empresa['endereco'] . "\n" . 
                        $this->empresa['telefone'] ;


        $this->MultiCell(80, 7, utf8_decode($info_empresa));

    }

    function dados_pedido(){


        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(255,0,0); 
        $this->Cell(60,7, utf8_decode("Pedido Nº: " . $this->pedido['numero']),0,1);

        $this->SetTextColor(0,0,0); 

        $this->SetX(150);
        $this->SetFont('Arial', '', 12);

        $info_pedido = 'Data: ' . $this->pedido['data'] . "\n" . 
                       utf8_decode('Cliente: ' . $this->pedido['cliente']);

  
        $this->MultiCell(60, 7,$info_pedido);

        
    }

    // Corpo pedido
    function exibir_itens($itens){

        // Cabeçalho da tabela
        $this->Cell(20, 8, utf8_decode('Código'),0,0,'R');
        $this->Cell(70, 8, utf8_decode('Descrição'),0,0,'L');
        $this->Cell(20, 8, 'UN',0,0,'R');
        $this->Cell(25, 8, 'Qtd',0,0,'R');
        $this->Cell(25, 8, 'Unit.',0,0,'R');
        $this->Cell(30, 8, 'Total', 0, 1,'R');


        foreach ($itens as $item) {

            $totalItem = $item[3] * $item[4];
            $this->totalPedido += $totalItem;

            $this->Cell(20, 8, $item[0],0,0,'R');
            $this->Cell(70, 8, utf8_decode($item[1]), 0);
            $this->Cell(20, 8, $item[2], 0, 0, 'R');
            $this->Cell(25, 8, number_format($item[3], 2, ',', '.'), 0, 0, 'R');
            $this->Cell(25, 8, 'R$ ' . number_format($item[4], 2, ',', '.'), 0, 0, 'R');
            $this->Cell(30, 8, 'R$ ' . number_format($totalItem, 2, ',', '.'), 0, 1, 'R');
        }

        $this->ultimaPagina = true;

    }


    // RODAPÉ
    function Footer(){
        if ($this->ultimaPagina){
                $this->SetY(-30);

                $this->SetFont('Arial', 'B', 12);

                $this->Cell(160,10,'TOTAL',1,0,'R'
                );

                $this->Cell(30,10,'R$ ' . number_format($this->totalPedido,2,',','.'),1,1,'R');
                $this->totalGeral=0;
        }

        
    }

    
}

$caminho_arquivo = 'arquivos/produtos.csv';

$pdf = new PDF();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 10);

$itens = $pdf->LerArquivo($caminho_arquivo);

$pdf->SetFont('Arial', '', 10);

$pdf->exibir_itens($itens);

$pdf->Output('F','arquivos/orcamento_empresa.pdf');