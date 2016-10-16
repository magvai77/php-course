<?php 
function zeroOne($count)
{
	$array = [];
		for ($i=1; $i <= $count; $i++) { 
			if ($i % 2 == 1) {
				$array[$i] = 0;
			}
			else {
				$array[$i] = 1;
			}
		}
	return $array;
}

$result = zeroOne(10);
$description = 'Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.';
$inputData = '';
