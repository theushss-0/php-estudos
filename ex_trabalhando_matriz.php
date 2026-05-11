<?php require_once("ex_matriz.php");


function print_array($mat, $x, $y){
    echo "\n\n  " . "\t1.\t2.\t3.\t4.\t5.\n\n";
    $h = $y;
    for($i=1; $i<=$x; $i++){
        echo $i . ". ";
        for($j = 1; $j <= $y; $j++){
            
            if($i == $j){
                echo "\t(" . $mat[$i][$j] . ")";
                continue;
            }
            echo "\t" . $mat[$i][$j];

        }
        echo "\n\n";
    }
}

function somar_elementos($mat, $x, $y, $inicia = 1){
    $soma = 0;
    for($i=1; $i<=$x; $i++){
        for($j = 1; $j <= $y; $j++){
            $soma += $mat[$i][$j];
        }
    }
    return $soma;
}

function somar_diagonal($mat, $x){
    $soma = 0;
    for($i=1; $i<=$x; $i++){
        $soma += $mat[$i][$i];
    }
    return $soma;
}

function somar_diagonal_inversa($mat, $x, $y){
    $soma = 0;
    $j = $y;
    for($i=1; $i<=$x; $i++){
        echo "\nmat[${i}][${j}] = ". $mat[$i][$j];
        $soma += $mat[$i][$j];
        $j--;
    }
    return $soma;
}

function max_elemento($mat, $x, $y){
    $maior = $mat[1][1];
    for($i=1; $i<=$x; $i++){
        for($j = 1; $j <= $y; $j++){
            if($mat[$i][$j] > $maior){
                $maior = $mat[$i][$j];
            }
        }
    }
    return $maior;
}

function min_elemento($mat, $x, $y){
    $menor = $mat[1][1];
    for($i=1; $i<=$x; $i++){
        for($j = 1; $j <= $y; $j++){
            if($mat[$i][$j] < $menor){
                $menor = $mat[$i][$j];
            }
        }
    }
    return $menor;
}



$soma_elementos = somar_elementos($mat,$x,$y);
$soma_diagonal = somar_diagonal($mat, $x);
$soma_diagonal_inversa = somar_diagonal_inversa($mat, $x, $y);
$maior_numero = max_elemento($mat, $x, $y);
$menor_numero = min_elemento($mat, $x, $y);

print_array($mat, $x, $y);

echo "Soma dos elementos: " . $soma_elementos . "\n";
echo "Soma dos elementos na diagonal: " . $soma_diagonal . "\n";
echo "Soma dos elementos na diagonal inversa: " . $soma_diagonal_inversa . "\n";
echo "Elemento de Maior valor: " . $maior_numero . "\n";
echo "Elemento de Menor valor: " . $menor_numero . "\n";
