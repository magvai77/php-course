<?php 
function square($count) {
$array = [];
	for ($a=0; $a <= $count; $a++) { 
		$array[$a] = $a * $a;
	}
	return $array;
}	
$result = square(15);
var_dump($result);
