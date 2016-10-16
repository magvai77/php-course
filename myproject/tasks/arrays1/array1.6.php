<?php 
function sortArray($array)
{
$count = count($array);
	for ($a=0 ; $a < $count-1; $a++) { 
		$min = $a;
			for ($b = $a + 1; $b < $count; $b++) { 
				if ($array[$b] < $array[$min]) {
					$min = $b;
				}
			}
		$temp = $array[$a];
		$array[$a] = $array[$min];
		$array[$min] = $temp;
		$result = "Sort no function:" .  var_dump($array) .  "<br>Sort function" . asort($array);
}

$array = [1,3,4,5,6,45,34,36,76,43,453,786,234];
$result = sortArray($array);
$description = 'Определите, есть ли в массиве повторяющиеся элементы.';
$inputData = "$array";
