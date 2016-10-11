<?php
function numbers($count) {
	$result = '';
	for ($i=35; $i <= $count; $i++) { 
		if ($i % 7 == 1 or $i % 7 == 2 or $i % 7 == 5) {
			$result .= "$i ";
		}
	}
	return $result;
}

$result = numbers(87);
echo $result;
