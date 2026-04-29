<?php

$populacaoA = 5_000_000;
$populacaoB = 7_000_000;

$taxa_aumento_mes_A = (0.03/12) + 1;
$taxa_aumento_mes_B = (0.02/12) + 1;

$meses = 0;

while($populacaoA < $populacaoB){
    $populacaoA = $populacaoA * $taxa_aumento_mes_A;
    $populacaoB = $populacaoB * $taxa_aumento_mes_B;
    $meses++;
}

$anos = $meses/12;

echo "A população do País A ficou maior em " . $meses ." meses ({$anos} anos).\n";
echo "População Pais A: " . round($populacaoA,0) . "\n";
echo "População Pais B: " . round($populacaoB,0) . "\n";



