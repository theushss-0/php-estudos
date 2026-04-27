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

function ordenar_vetores($vet1, $vet2){
    $vet3 = [];
    for($i=0; $i<count($vet1); $i++){
        for($j=0;$j<count($vet2);$j++){
            if($vet1[$i] < $vet2[$j]){
                $vet3[] = $vet1[$i];
            }else{
                $vet3[] = $vet2[$j];
            }
        }
    }
    return $vet3;
}

$vet4 = ordenar_vetor($vetor3);
$vet3 = ordenar_vetores($vetor1, $vetor2);


for($i=0;$i<count($vet3); $i++){
    echo $vet3[$i] . "\t";
}