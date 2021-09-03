<?php

// array_diff - Diferença entre os arrays passados
$array1 = [1,2,3,4,5];
$array2 = [3,2,3,6];

$diferences = array_diff($array1, $array2);
// var_dump($diferences);

// array_keys - Mostra as chaves de um array
// var_dump(array_keys($diferences));

// array_unique - remove valores duplicados de um array
// var_dump(array_unique(
//     [1,3,11,1,1]
// ));