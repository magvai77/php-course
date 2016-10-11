<?php 
$array1 = [1,3,5,7,9,11];
$array2 = [2,4,6,8,10,12];

$newarray = array_merge($array1, $array2);
sort($newarray);
var_dump($newarray);