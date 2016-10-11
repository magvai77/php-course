<?php 
function zeroOne($count) {
$array = [];
	for ($i=1; $i <= $count; $i++) { 
		if ($i % 2 == 1) {
			$array[$i] = 0;
		}
		else {
			$array[$i] = 1;
		}
	}
	return $array;
}
$result = zeroOne(10);

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Arrays 1</h1>
				<div class="task-item">
					Task:<br>
					Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
				</div>
				<div class="task-item">
					Input:<br>
					...
				</div>
				<div class="task-item">
					Output:<br>
					<?php var_dump($result); ?>
				</div>
				<div class="task-item">
					Code:<br>
					...
				</div>
			</div>
		<?php require '../../view/footer.php'; ?>
