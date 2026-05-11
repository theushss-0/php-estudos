<?php

$num = intval(readline("Informe o numero: "));
$numero_atual = 1;
$primos = [];
$quantidade = 0;
$divisiveis = 1;
$i = 2;
$passos = 0;


while($numero_atual <= $num){
     $i = 2;
     if($numero_atual % 2 == 0 and $numero_atual != 2){
          $numero_atual++;
          continue;
     }

     while($i <= $numero_atual and $divisiveis < 3){
         
         if ($numero_atual % $i == 0){
             $divisiveis+=1;
         }
         $i++;
         $passos++;

     }
     if ($divisiveis == 2){
         $quantidade++;
         $primos[] = $numero_atual;
         $divisiveis = 1;
         $numero_atual+=1;
         continue;
     }

     $numero_atual++;
     $divisiveis = 1;
   
}

echo "quantidade de passos: " . $passos . "\n";
echo "quantidade de primos: " . $quantidade . "\n";
var_dump($primos);

