<?php 
function zeroOne($count) {
$array = [];
	for ($i=1; $i <= $count; $i++) { 
		if ($i % 2 == 1) {
			$array[$i] = 0;
		}
		else {
			$array[$i] = 1;
		}
	}
	return $array;
}
$result = zeroOne(100);

var_dump($result);
