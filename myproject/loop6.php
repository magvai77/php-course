<?php
$count = 999999;
for ($i=100000; $i <= $count; $i++) {
	$a = substr($i, 0, 1);	
	$b = substr($i, 1, 1);
	$c = substr($i, 2, 1);
	$d = substr($i, 3, 1);
	$e = substr($i, 4, 1);
	$f = substr($i, 5, 1);
		if ($a + $b + $c == $d + $e + $f) {
			echo "$i<br/>";
	}
}
