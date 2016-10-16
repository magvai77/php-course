<?php
function luckyTicket($count)
{
	$b = 1;
	$qt = 0;
	$numberlt = '';
		for ($a = 1; $a <= $count; $a++) {
			$b = substr("00000". "$a", -6);
				if ($b[0] + $b[1] + $b[2] == $b[3] + $b[4] + $b[5]) {
				$numberlt .= "<br/>$b";
				$qt++;
				}
		}
	$percent = ($qt / 999999) * 100;
	$result = "<br/>Count lucky ticket: $qt <br/>Percent of the total: $percent" . " %" . "<br/>Lucky tikets: $numberlt<br/>";
	return $result;
}

$result = luckyTicket(1000000);
$description = 'Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и процент от общего числа билетов.';
$inputData = '';
