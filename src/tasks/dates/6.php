<?php
function getToday()
{
	$result = date("Y-d-m H:i:s");
	return $result;
}

$result = getToday();
$description = 'Выведите на экран текущий год, день, месяц, час, минуту, секунду.';
$inputData = "Сегодня";
