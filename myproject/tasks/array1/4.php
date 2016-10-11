<?php 
function duplicate() {
$array = [1,435,5,4,4,3,6,7,545,6,657];
$count = count($array);
$uniq = 0;
	foreach (array_unique($array) as $value) {
		$value = $uniq++;
	}
	if ($count == $uniq) {
		$result = "No duplicate values";

	}
	else {
		$result = "Duplicate values count: " . ($count - $uniq) . " <br/>";
 	}
 	return $result;
}
$result = duplicate();

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
					<?php echo $result; ?>
				</div>
				<div class="task-item">
					Code:<br>
					...
				</div>
			</div>
		<?php require '../../view/footer.php'; ?>
