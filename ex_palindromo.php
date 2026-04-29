<?php

$texto = readline("Informe o Texto que deseja verificar: ");


function remover_espaco($texto){
    $texto_aux = '';
    for($i=0; $i<strlen($texto); $i++){
        if($texto[$i] == " "){
            continue;
        }
        $texto_aux = $texto[$i];
    }
    return $texto_aux;
}

function inverter_texto($texto){
    $texto_invertido = "";
    for($i=strlen($texto)-1;$i>=0;$i--){
        $texto_invertido .= $texto[$i];
    }
    return $texto_invertido;  
}

$texto_invertido = inverter_texto($texto);

if(strtolower(remover_espaco($texto)) == strtolower(remover_espaco($texto_invertido))){
    echo "O texto '${texto}' é um palindromo!!";
}else{
    echo "A texto '${texto}' não é um palindromo e o texto invertido é ${texto_invertido}";
}