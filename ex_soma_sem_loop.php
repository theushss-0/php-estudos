<?php

$numero = intval(readline("Informe o numero: "));
$soma = 0;
$meio = $numero/2;
$sucessor = $numero+1;

if($numero%2 == 0){
    $soma = $meio*$sucessor;
}else{
    $soma = ($sucessor/2) * $sucessor;
}

echo $soma."";