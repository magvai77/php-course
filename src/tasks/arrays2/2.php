
<?php 
function arrayRand($array) 
{
	$count = count($array);
	$newarray = array_fill(0, $count, 0);
	foreach ($array as $key => $value) {
		while (1) {
			$a = mt_rand(0,$count - 1);
			if ($newarray[$a] == 0 and $a != $key) {
				$newarray[$a] = $value;
				break;
			}
		}
	}
	return $newarray;
}

$array = [1,2,3,4,555,6,788,8,955,10,11,12];
$functionRand = $array;
shuffle($functionRand);
$result = [
	"Random" => $functionRand,
	"Absolute random" => arrayRand($array)
];
$description = 'Дан массив из n элементов. а) Переставьте его элементы случайным образом. б) Переставьте его элементы случайным образом так, чтобы каждый элемент оказался на новом месте.';
$inputData = "[1,2,3,4,555,6,788,8,955,10,11,12]";
