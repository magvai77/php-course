<?php 
function sumProduct() {

$array = [1,435,5,4,6,3,4,4,545,6,657];

$a = 0;
$b = 1;
foreach ($array as $value) {
	$a += $value;
	$b *= $value;
}
$result = "Sum no function: $a <br/> Product  no function: $b <br/>Sum function: " . array_sum($array) . "<br/>Product function: " . array_product($array);
return $result;
}
$result = sumProduct();

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Arrays 1</h1>
				<div class="task-item">
					Task:<br>
					Найдите сумму и произведение элементов массива.Реализовать двумя способами: с помощью стандартных функций и без.
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
