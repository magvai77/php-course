<?php
function sum($count) {
	$a = 0;
	for ($i=1; $i <= $count; $i += 3) {
		$a = $a + $i;
	}
	return $a;
}
$result = sum(112);

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Найти сумму  1+4+7+10+...+112.
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
