<?php

function imprimir_prestacoes($prest){
    for($i=0;$i<count($prest); $i++){
        echo "\nValor da prestação " . ($i+1) . ": R$ " . $prest[$i] ;
    }
    echo "\n";
}


$prestacoes = [];
while(True){

    $salario = floatval(readline("Informe seu salario: "));
    
    $valor_emprestimo = floatval(readline("Informe o valor do emprestimo: "));
    if($valor_emprestimo > ($salario*10)){
        echo "\n### Valor do emprestimo não permitido !!\n";
        continue;
    }

    $nr_prestacoes = intval(readline("Informe o numero de prestações: "));
    $vlr_max_prestacoes = $salario * 0.3;
    $aux_vlr_prestacoes = $valor_emprestimo/$nr_prestacoes;

    // verifica se o valor das prestações é maior que o permitido
    if($aux_vlr_prestacoes > $vlr_max_prestacoes){
        echo "\n### Valor das prestações muito alto!!(Valor das prestações: R$ ${aux_vlr_prestacoes} | Limite permitido: até R$ ${vlr_max_prestacoes})\n";
        continue;
    }

    // verifica o percentual de cada parcela
    $percentual_prestacao = (1/$nr_prestacoes);
    

    // recebe o valor de cada parcela em um array
    for($i=0; $i<$nr_prestacoes; $i++){
        $prestacoes[] = ($valor_emprestimo*$percentual_prestacao);
    }

    imprimir_prestacoes($prestacoes);

    echo "\nDeseja continuar? S/N";

    $opcao = readline("=> ");

    if(strtoupper($opcao) == 'N'){
        break;
    }

    $prestacoes = [];

}
