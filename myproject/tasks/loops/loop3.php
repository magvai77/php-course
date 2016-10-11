<?php
function number($count) {
	$result = '';
	for ($i=0; $i < $count; $i++) { 
		if (strpos($i, "3")!== false ) { 
			if ($i % 5 <> 0) {
				$result .= "$i ";
			}
		}	
	}
	return $result;
}
$result = number(10000);
echo $result;
