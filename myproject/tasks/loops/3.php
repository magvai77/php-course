<?php
function number($count) {
	$result = '';
	for ($i=0; $i < $count; $i++) { 
		if (strpos($i, "3")!== false ) { 
			if ($i % 5 <> 0) {
				$result .= "$i ";
			}
		}	
	}
	return $result;
}
$result = number(10000);

?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.
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
