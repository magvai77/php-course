<?php 
$array = [1,-3,-5,-7,9,-11,15,-17,-19,-25,-34,45,46,56];
$i = 0;
foreach ($array as $key => $value) {

	if ($value < 0) {
		array_splice($array, $i + 1, 0, 0);
		$i += 2;
	} else {
	$i++;
	}
}
var_dump($array);
