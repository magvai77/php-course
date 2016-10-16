<?php 
function sort2arrays($array1, $array2)
{
	$newarray = array_merge($array1, $array2);
	sort($newarray);
}

$array1 = [1,3,5,7,9,11];
$array2 = [2,4,6,8,10,12];

$result = sort2arrays($array1, $array2)
$description = 'Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив.';
$inputData = "[1,3,5,7,9,11], [2,4,6,8,10,12]";