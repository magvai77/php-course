<?php
function sayHello($count = 1)
{
	$result = '';
	for ($i=0; $i < $count; $i++) {
		$result .= "Hello World!<br/>";
	}
	return $result;
}
$result = sayHello(10);

$description = 'one two';
$inputData = 'one two';
