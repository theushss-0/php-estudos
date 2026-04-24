<?php 



$num = 15;

for($i=1; $i<= $num; $i++){
    for($j=1; $j<=$num; $j++){
        for($k=1; $k<=$num; $k++){
            echo "(" . $i . "," . $j . "," .  $k . ")  "; 
        }
        echo "\n";
    }
    echo "\n\n";
}

