<?php

$valores = array();
$max_num = 100000;

for ($x=0;$x<$max_num;$x++) {
  $num_aleatorio = rand(1,100000);
  array_push($valores,$num_aleatorio);
}



echo "Bucicas está rodando...";

?>