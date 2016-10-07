<?php 
$array = [1,435,5,4,6,3,4,4,545,6,657];
echo "Сумма функцией: " . array_sum($array) . "<br/>";
echo "Произведение функцией: " . array_product($array) . "<br/>";

$a = 0;
$b = 1;
foreach ($array as $value) {
	$a += $value;
	$b *= $value;
}
echo "Сумма без использования стандартной функции: $a <br/>";
echo "Сумма без использования стандартной функции: $b <br/>";
