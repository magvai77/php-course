<?php 
$array = [1,3,4,5,6,45,34,36,76,43,453,786,234];
$count = count($array);
asort($array);
// for ($a=0 ; $a < $count-1; $a++) { 
// 	$min = $a;
// 		for ($b = $a + 1; $b < $count; $b++) { 
// 			if ($array[$b] < $array[$min]) {
// 				$min = $b;
// 			}
// 		}
// 	$temp = $array[$a];
// 	$array[$a] = $array[$min];
// 	$array[$min] = $temp;
//}
unset($array[array_search(76, $array)]);
var_dump($array);
