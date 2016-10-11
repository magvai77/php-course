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
$result = "Lucky tikets: $numberlt<br> Count lucky ticket: $qt <br/> Percent of the total: $percent";
return $result;
}
$result = luckyTicket(1000000);

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и процент от общего числа билетов.

				</div>
				<div class="task-item">
					Input:<br>
					...
				</div>
				<div class="task-item">
					Output:<br>
					<?php echo $result; ?>
				</div>
				<div class="task-item">
					Code:<br>
					...
				</div>
			</div>
		<?php require '../../view/footer.php'; ?>
