<?php
function minMax() { 
$array = [41,43,24,56,33,57];
$a = array_search(max($array), $array);
$b = array_search(min($array), $array);
list($array[$a], $array[$b]) = array($array[$b], $array[$a]);
$result = $array;
return $result;
}

$result = minMax();



?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Arrays 1</h1>
				<div class="task-item">
					Task:<br>
					Определите, есть ли в массиве повторяющиеся элементы.
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
