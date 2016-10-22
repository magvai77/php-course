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
	} 
	return $array;
}

$array = [1,3,4,5,6,45,34,36,76,43,453,786,234];
$functionSort = $array; 
asort($functionSort);
$result = [
	"Sort no function" => sortArray($array),
	"Sort function" => $functionSort
];
$description = 'Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.';
$inputData = "[1,3,4,5,6,45,34,36,76,43,453,786,234]";
