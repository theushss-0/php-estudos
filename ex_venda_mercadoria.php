<?php

$valor = floatval(readline("Informe o valor da mercadoria: "));
$entrada = floatval(readline("Informe o valor da entrada: "));

$prestacao1 = round(($valor-$entrada)*0.5, 3);
$prestacao2 = round(($valor-$entrada-$prestacao1), 3);

echo "Entrada: R$ ${entrada}\n";
echo "Prestação 1: R$ ${prestacao1}\n";
echo "Prestação 2: R$ ${prestacao2}\n";
echo "Valor Total: R$ " . round((($prestacao1+$prestacao2)*2)+$entrada, 3) . "\n";