<?php
function getDateFormat($day, $month, $year)
{
	return date('d.m.Y', mktime(0, 0, 0, $month, $day, $year));	
}

$result = getDateFormat(2, 13, 2015);
$taskDescription = "С помощью функций mktime и date выведите 13 февраля 2015 года в формате '31.12.2025.'";
$inputData = '';
