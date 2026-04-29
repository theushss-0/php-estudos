<?php

$vetor1 = [1,5,7,9];
$vetor2 = [4,8,10,11,15];

function ordenar_vetores($vet1, $vet2){
    $vet3 = [];

    $tam1 = count($vet1);
    $tam2 = count($vet2);

    $i = 0;
    $j = 0;

    while($i < $tam1 and $j < $tam2){
        if($vet1[$i] < $vet2[$j]){
            $vet3[] = $vet1[$i];
            $i++;
        }else{
            $vet3[] = $vet2[$j];
            $j++;
        }
    }

    while($i < $tam1){
        $vet3[] = $vet1[$i];
        $i++;
    }

    while($j < $tam2){
        $vet3[] = $vet2[$j];
        $j++;
    }
    return $vet3;
}

$vet3 = ordenar_vetores($vetor1, $vetor2);


for($i=0;$i<count($vet3); $i++){
    echo $vet3[$i] . "\t";
}