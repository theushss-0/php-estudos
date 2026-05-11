<?php 

$arr = [7,4,6,2,2,5,3,0,1,10];

function imprimir_array($vet){
    for($i=0;$i<count($vet); $i++){
        echo "A[${i}] = " . $vet[$i] . "\n";
    }
}


function ordenacao($arr){
    $aux = $arr[0];
    for($i=0;$i< count($arr); $i++){
        for($j=$i+1;$j< count($arr); $j++){
            if($arr[$i] > $arr[$j]){
                $aux = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $aux;     
            }
            echo "${i} - ${j} - ${aux}\n";
        }
    }
    return $arr;
}


$arr_ordenado = ordenacao($arr);

imprimir_array($arr_ordenado);