<?php 
function square($count) {
$array = [];
	for ($a=0; $a <= $count; $a++) { 
		$array[$a] = $a * $a;
	}
	return $array;
}	
$result = square(15);

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Arrays 1</h1>
				<div class="task-item">
					Task:<br>
					Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.
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
