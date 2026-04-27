<?php 


$vet1 = [1,2,3];
$vet2 = [4,5,6];
$vet3 = $vet1;
$index = count($vet3) - 1;

for($i=0;$i<count($vet2); $i++){
    
    if ($vet2[0] > $vet[$index]){
        $arr_aux = $vet3;
        $vet3[$i] = $vet2[$i];
        $vet3[] = $arr_aux;
        continue;
    }
    $vet3 [] = $vet2[$i];
}
