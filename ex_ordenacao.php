<?php 

$arr = [1,4,6,2,5,5,2,4,7,3];


function ordenacao($arr){
    $aux = 0;
    for($i=0;$i< count($arr); $i++){
        for($j=$i+1;$j< count($arr); $j++){
            if($arr[$i] > $arr[$j]){
                $aux = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $aux;     
            }
        }
    }
    return $arr;
}


$arr_ordenado = ordenacao($arr);

var_dump($arr_ordenado);