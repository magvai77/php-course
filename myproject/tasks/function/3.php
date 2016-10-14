<?php
function percentCorrection($array)
{
	foreach ($array as $key => $value) {
		$array[$key] = $value * ($value > 2 ? ($value -1) : $value);
	}
	return $array;
}

$result = percentCorrection([1,2,3,4,5,1.5,400,0.8,2.5]);
var_dump($result);
