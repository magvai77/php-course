<?php
function sum($count) {
	$a = 0;
	for ($i=1; $i <= $count; $i += 3) {
		$a = $a + $i;
	}
	return $a;
}
$result = sum(112);

$description = 'раз два';
$inputdata = 'три четыре';