<?php 

$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

for($i=0; $i< count($nums); $i++){
    for($j=$i+1; $j<count($nums); $j++){
        for($k=$j+1; $k<count($nums); $k++){
            echo "(" . $nums[$i] . "," . $nums[$j] . "," .  $nums[$k] . ")  "; 
        }
        echo "\n";
    }
    echo "\n\n";
}

