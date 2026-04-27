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

    $nr_prestacoes = floatval(readline("Informe o numero de prestações: "));
    $vlr_max_prestacoes = round($salario * 0.3, 3);
    $aux_vlr_prestacoes = round($valor_emprestimo/$nr_prestacoes, 3);

    if($aux_vlr_prestacoes > $vlr_max_prestacoes){
        echo "\n### Valor das prestações muito alto!!(Valor das prestações: R$ ${aux_vlr_prestacoes} | Limite permitido: até R$ ${vlr_max_prestacoes})\n";
        continue;
    }

    $percentual_prestacao = round((1/$nr_prestacoes), 3);
    

    for($i=0; $i<$nr_prestacoes; $i++){
        $prestacoes[] = round($valor_emprestimo*$percentual_prestacao, 3);
    }

    imprimir_prestacoes($prestacoes);

    echo "\nDeseja continuar? S/N";

    $opcao = readline("=> ");

    if(strtoupper($opcao) == 'N'){
        break;
    }

}
