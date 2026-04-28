<?php

$vetor1 = [1,2,6];
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

function ordenar_vetores($vet1, $vet2, $tam1){
    $vet3 = [];
    $i = 0;
    $j = 0;
    while($i < $tam1){
        if($vet1[$i] < $vet2[$j]){
            $vet3[] = $vet1[$i];
            unset($vet1[$i]);
            $i++;
            $j++;
        }else{
            $vet3 = $vet2[$j];
            unset($vet2[$j]);
            $j++;
            
        }
    }
    $i = 0;
    while($i < count($vet1)){
        $vet3[] = $vet1[$i];
        $i++;    
    }

    $j=0;
    while($j < count($vet2)){
        $vet3[] = $vet2[$j];
        $j++;
    }
    
    var_dump($vet2);

    return $vet3;
}

$vet4 = ordenar_vetor($vetor3);
$vet3 = ordenar_vetores($vetor1, $vetor2, count($vetor1));


for($i=0;$i<count($vet3); $i++){
    echo $vet3[$i] . "\t";
}