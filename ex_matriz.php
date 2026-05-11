<?php

$x = intval(readline("Informe as linhas:  "));
$y = intval(readline("Informe as colunas:  "));
$mat = [];
$contador = 0;

for ($i=1; $i<=$x; $i++){
    for($j=1;$j<=$y;$j++){
        $contador++;
        $mat[$i][$j] = $contador;
    }
}

echo "Quantidade de elementos: " . $contador . "\n";
print_r($mat);