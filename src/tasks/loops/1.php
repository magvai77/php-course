<?php
function sayHello($count)
{
	$result = '';
	for ($i=0; $i < $count; $i++) {
		$result .= "<br/>Hello";
	}
	return $result;
}

function taskFunction($count)
{
	return sayHello($count);
}

// $result = sayHello(6);

// $description = 'Выведите  10 раз фразу "Hello"';
// $inputData = '';
