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

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Даны натуральные числа от 35 до 87. Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.

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
