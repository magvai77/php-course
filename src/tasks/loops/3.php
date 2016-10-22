<?php
function number($count) 
{
	$result = '';
	for ($i=0; $i < $count; $i++) { 
		if (strpos($i, "3")!== false ) { 
			if ($i % 5 <> 0) {
				$result .= "<br/>$i";
			}
		}	
	}

	return $result;
}

$result = number(10000);
$description = 'Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.';
$inputData = '';
