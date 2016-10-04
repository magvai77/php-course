<?php
$min = 0;
$max = 100;

do {	
	$a = mt_rand($min,$max);
	$b = mt_rand($min,$max);
	$c = mt_rand($min,$max);
		if ($a <> $b and $a <> $c and $b <> $c) {
			echo "$a $b $c";
			break;
		if ($a == $b or $a == $c or $b == $c) {
			$a = mt_rand($min,$max);
			$b = mt_rand($min,$max);
			$c = mt_rand($min,$max);
		}
		}
} while (1);
