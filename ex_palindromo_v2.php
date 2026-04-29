<?php

$texto = readline("Informe o Texto que deseja verificar: ");



function remover_espaco($texto){
    $texto_aux = '';
    for($i=0; $i<strlen($texto); $i++){
        if($texto[$i] == " "){
            continue;
        }
        $texto_aux .= $texto[$i];
    }
    return $texto_aux;
}

function e_palindromo($texto){

    $texto_aux = strtolower(remover_espaco($texto));

    echo $texto_aux . "\n";
    $palindromo = true;

    $j = strlen($texto_aux)-1;
    for($i=0;$i<strlen($texto_aux);$i++){

        if($texto_aux[$i] != $texto_aux[$j]){
            $palindromo = false;
            echo $texto_aux[$j];
            break;
        }
        echo $texto_aux[$j];
        $j--;

    }
    return $palindromo;
}



if(e_palindromo($texto)){
    echo "\nO texto '{$texto}' é palindromo!!";
}else{
    echo "\nO texto '{$texto}' não é palindromo!!";
}