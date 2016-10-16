<?php 
function afterNegativeZero($array)
{
	$i = 0;
	foreach ($array as $key => $value) {
		if ($value < 0) {
			array_splice($array, $i + 1, 0, 0);
			$i += 2;
		} else {
			$i++;
		}
	}
	return $array
}

$array = [1,-3,-5,-7,9,-11,15,-17,-19,-25,-34,45,46,56];

$result = afterNegativeZero($array);
$description = 'Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.';
$inputData = "[1,-3,-5,-7,9,-11,15,-17,-19,-25,-34,45,46,56]";