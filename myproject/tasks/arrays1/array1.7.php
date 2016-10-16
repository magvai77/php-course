<?php 
$array = [1,3,4,5,6,45,34,36,76,43,453,786,234];
asort(unset($array[array_search(76, $array)]);
var_dump($array);
