<?php
function getTimestamp($timezone)
{
	$result = time() + $timezone * 3600;
	return $result;
}
$result = getTimestamp("+7");
$description = "Выведите текущее время в формате timestamp";
$inputData = "Текущее время(UTC+7";
