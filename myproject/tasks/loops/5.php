<?php
function numbers($count)
{
	$result = '';
	for ($i=35; $i <= $count; $i++) { 
		if ($i % 7 == 1 or $i % 7 == 2 or $i % 7 == 5) {
			$result .= "<br>$i";
		}
	}
	return $result;
}

$result = numbers(87);
$description = 'Даны натуральные числа от 35 до 87. Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.';
$inputData = '';