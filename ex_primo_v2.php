<?php

$num = intval(readline("Informe o numero: "));
$primos = [];

for ($i = 2; $i<= $num; $i++){
    
    if($i % 2 == 0 and $i != 2) continue;
    if($i % 3 == 0 and $i != 3) continue;
    if($i % 5 == 0 and $i != 5) continue;
    if($i % 7 == 0 and $i != 7) continue;

    $primos[] = $i;

}


$qtd_primos = count($primos);
echo "Quantidade = " . $qtd_primos ."\n";
var_dump($primos);