<?php
function sayHello($count = 1)
{
	$result = '';
	for ($i=0; $i < $count; $i++) {
		$result .= "<br/>Hello";
	}
	return $result;
}
$result = sayHello(10);

$description = 'Выведите  10 раз фразу "Hello"';
$inputData = '';
