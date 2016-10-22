<?php 
function square($count)
{
	$array = [];
		for ($a=0; $a <= $count; $a++) { 
			$array[$a] = $a * $a;
		}
	return $array;
}	

$result = square(15);
$description = 'Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.';
$inputData = '';
