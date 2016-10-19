<?php
function getDiffTimestamp($hour, $min, $sec ,$month, $day, $year)
{
	$result = time() - mktime($hour, $min, $sec ,$month, $day, $year);
	return $result;
}
$description = "Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.";
$inputData = '';
$result = getDiffTimestamp(13, 12, 59, 3, 15, 2000);
