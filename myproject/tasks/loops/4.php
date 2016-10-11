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

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Вывести 3 случайных числа от 0 до 100 без повторений.
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
