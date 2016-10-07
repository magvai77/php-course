<?php 
$array = [];
$count = 100;
for ($i=1; $i <= $count; $i++) { 
	if ($i % 2 == 1) {
		$array[$i] = 0;
	}
	else {
		$array[$i] = 1;
	}
}
var_dump($array);
