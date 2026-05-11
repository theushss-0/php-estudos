<?php 

$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

for($i=0; $i< count($nums); $i++){
    for($j=0; $j<count($nums); $j++){
        if($i == $j) continue;
        for($k=0; $k<count($nums); $k++){
            if($i == $k or $j == $k) continue;
            echo "(" . $nums[$i] . "," . $nums[$j] . "," .  $nums[$k] . ")  "; 
        }
        echo "\n";
    }
    echo "\n\n";
}

