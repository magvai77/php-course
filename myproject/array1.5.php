<?php 
$array = [41,43,24,56,33,57];
$a = array_search(max($array), $array);
$b = array_search(min($array), $array);
list($array[$a], $array[$b]) = array($array[$b], $array[$a]);
var_dump($array);
