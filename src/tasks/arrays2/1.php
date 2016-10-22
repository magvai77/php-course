<?php
function uniq($array)
{ 
	$uniq = array_unique($array); 
	return $uniq;
}

$array = [99,4,34,46,92,34,34,36,34,43,34,786,234];
$result = uniq($array);
$description = 'Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5.';
$inputData = "[99,4,34,46,92,34,34,36,34,43,34,786,234]";
