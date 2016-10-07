<?php 
$array = [];
$count = 10000;
for ($a=0; $a <= $count; $a++) { 
	$array = [$a => $a * $a];
	var_dump($array);
}
