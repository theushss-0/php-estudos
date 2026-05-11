<?php

function linha(){
    echo "\n--------------------------------------------------\n";
}
$qtd_notas = [0,0,0,0,0];
$notas = [1,5,10,50,100];
function sacar($valor){

    $valor_minimo = 10.0;
    $valor_maximo = 600.0;

    global $notas;
    global $qtd_notas;
    $notas_escolhidas = [];

    $aux_valor = $valor;

    if($valor < $valor_minimo or $valor > $valor_maximo){
        
        linha();
        echo "Valor de saque não permitido!\nValor Mínimo: R$ ${valor_minimo}\nValor Máximo: R$ ${valor_maximo}\nValor informado: R$ ${valor}";
        linha();

        return [];
    }

    $i = count($notas)-1;
    while($aux_valor > 0){
        if($notas[$i] <= $aux_valor) {
            $notas_escolhidas[] = $notas[$i];
            $aux_valor -= $notas[$i];
            $qtd_notas[$i] += 1;
        }else{
            $i--;
        }
    }

    return $notas_escolhidas ;

}



linha();
echo "SISTEMA DE CAIXA ELETRONICO";
linha();

$valor_saque = floatval(readline("Informe o valor a ser sacado: "));
$notas_escolhidas = sacar($valor_saque);
$sacado = 0;

if($notas_escolhidas != []){
    linha();
    echo "Notas de saque: ";
    for($i=0; $i<count($notas_escolhidas); $i++){
        echo "R$ " . $notas_escolhidas[$i] . "\t";
        $sacado += $notas_escolhidas[$i];
    }

    echo "\nQuantidade de notas:\n";
    for($i=0; $i<count($notas); $i++){
        echo "$" .$notas[$i] . ": " . $qtd_notas[$i] . "\t";
    }
        
    echo "\nValor total saque: R$ " . $sacado;
    linha();
}
