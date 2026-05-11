<?php

$texto = readline("Informe a palavra: ");


for($i = 0; $i< strlen($texto); $i++){
    if($texto[$i] == 'a'){
        $texto[$i] = 'x';
    }
}

echo $texto . "\n";