<?php
function getPastTime($hour, $min, $sec) 
{
	$sec = time() - mktime($hour, $min, $sec);
	$result = "Прошло:<br/> "  . $sec / 86400 . " дней<br/>" . $sec / 3600 . " часов<br/>" . $sec / 60 . " минут<br/>" . $sec . " секунд" ; 
	return $result;
}

$result = getPastTime(7, 23, 48);
$description = 'Найдите количество секунд $sec, прошедших с 7:23:48 текущего дня до настоящего момента времени. Найдите количество минут, часов и дней, содержащихся в $sec (не одновременно, а последовательно: сначала минуты, потом часы и т.д.).';
$inputData = '';
