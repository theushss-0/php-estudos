<?php

$vetor1 = [1,2,3];
$vetor2 = [4,5,6];

$vetor3 = [...$vetor1,...$vetor2];
if ($vetor1[0] > $vetor2[count($vetor2)-1]){
    $vetor3 = [...$vetor2,...$vetor1];
}

function ordenar_vetor($vet){
    $tamanho = count($vet);


    for($i=0;$i < $tamanho; $i++){
        for($j=0;$j < $tamanho; $j++){
            if($vet[$i] < $vet[$j]){
                $aux = $vet[$i];
                $vet[$i] = $vet[$j];
                $vet[$j] = $aux;
            }
        }  
    }
    return $vet;
}

$vet4 = ordenar_vetor($vetor3);



for($i=0;$i<count($vet4); $i++){
    echo $vet4[$i] . "\t";
}