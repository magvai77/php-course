<?php
function luckyTicket($count) {
	$b = 1;
	$qt = 0;
	$numberlt = '';
	for ($a = 1; $a <= $count; $a++) {
		$b = substr("00000". "$a", -6);
			if ($b[0] + $b[1] + $b[2] == $b[3] + $b[4] + $b[5]) {
			$numberlt .= "$b ";
			$qt++;
			}
	}
$percent = ($qt / 999999) * 100;
$result = "Lucky tikets: $numberlt<br> Count lucky ticket: $qt <br/> Percent of the total: $percent" . " %";
return $result;
}
$result = luckyTicket(1000000);

$description = 'one two';
$inputData = 'one two';