<?php
function getTodayAnyFormat()
{
	$format1 = date("Y-m-d");
	$format2 = date("d.m.Y");
	$format3 = date("d.m.y");
	$format4 =  date("H:i:s");
	$result = $format1 . " " . $format2 . " " . $format3 . " " . $format4;
		return $result;
}

$result = getTodayAnyFormat();
$description = "Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'";
$inputData = '';
