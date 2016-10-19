<?php
function get31DecTimestamp()
{
	$year = date('Y');
	$result = mktime(0, 0, 0, 12, 31, $year);
	return $result;
}

$result = get31DecTimestamp();
$description = 'Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен';
$inputData = '31 Декабря текущего года';
