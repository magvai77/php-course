<?php
function getDateTimestamp($month, $day, $year)
{
	$result = mktime(0, 0, 0,$month, $day, $year); 
	return $result;
}

$result = getDateTimestamp(3, 1, 2025);
$description = 'Выведите 1 марта 2025 года в формате timestamp';
$inputData = '1 марта 2025 года';
