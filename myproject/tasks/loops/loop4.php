<?php
function random3($min,$max) {
	$relult = '';
	do {	
		$a = mt_rand($min,$max);
		$b = mt_rand($min,$max);
		$c = mt_rand($min,$max);
			if ($a <> $b and $a <> $c and $b <> $c) {
				$result = "$a $b $c";
				return $result;
				break;
			if ($a == $b or $a == $c or $b == $c) {
				$a = mt_rand($min,$max);
				$b = mt_rand($min,$max);
				$c = mt_rand($min,$max);
			}
			}
	} while (1);
}
$result = random3(0,100);
echo $result;
