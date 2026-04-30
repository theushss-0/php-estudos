<?php


$mat1 = [
    [10,20,30],
    [40,50,60],
    [70,80,90],
    [100,110,120]
];


$mat2 = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12]
];

$mat3 = [];
$mat4 = [];



function imprimir_matriz($mat){
    for($i=0;$i<count($mat); $i++){
        for($j=0;$j<count($mat[0]); $j++){
                echo "M[{$i}][{$j}] = " . $mat[$i][$j] . "\t";
        }
    echo "\n";
    }
}


echo "Matriz 1: \n";
imprimir_matriz($mat1);
echo "\n\n";

echo "Matriz 2: \n";
imprimir_matriz($mat2);
echo "\n\n"; 



for($i=0;$i<count($mat1); $i++){
    for($j=0;$j<count($mat1[0]); $j++){
        $mat3[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
        $mat4[$i][$j] = $mat1[$i][$j] - $mat2[$i][$j];
    }
}

echo "Soma entre as matrizes: \n";
imprimir_matriz($mat3);

echo "\n\n";

echo "Diferença entre as matrizes: \n";
imprimir_matriz($mat4);


