<?php


function fibonacci_recursao($num){
    if($num <= 1){
        return $num;
    }
    return fibonacci_recursao($num-1) + fibonacci_recursao($num-2);
}

function fibonacci_sem_recursao($num){
	
	if ($num <= 1) return $num;
	
	$ant = 0;
	$fi = 1;
	for($i =2; $i <= $num; $i++){
		$temp = $ant+ $fi;
		$ant = $fi;
		$fi = $temp;
	}
	return $fi;
	
}

echo "melhor caso sem recursão: " . fibonacci_sem_recursao(45) . "\n";
echo "pior caso usando recursão: " . fibonacci_recursao(45) . "\n";
