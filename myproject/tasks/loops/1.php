<?php
function sayHello($count = 1)
{
	$result = '';
	for ($i=0; $i < $count; $i++) {
		$result .= "Hello World!<br/>";
	}
	return $result;
}
$result = sayHello(10);
?>
		<?php require '../../view/header.php'; ?>
		<?php require '../../view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					Сказать 10 раз Hello World!
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
