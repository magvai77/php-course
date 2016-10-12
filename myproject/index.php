<?php
$path = '';
if (!empty($_GET['path'])) {
	$path = $_GET['path'];
}
var_dump($_GET);
$pathchunks = explode('-', $path);
var_dump($pathchunks);
$map = [
	"loops" => [
		"title" => "Loops",
		"tasks" => ['1.php',2,3,4,5,6]
	],
	"arrays1" => [
		"title" => "Arrays 1",
		"tasks" => [1,2,3,4,5,6]
	]
];
$section = $pathchunks[0];
$tasks = $pathchunks[1];
require __DIR__ . '/tasks/' . $section . '/' . $tasks . '.php'; 
?>

<?php require 'view/header.php'; ?>
		<?php require 'view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops -> 1</h1>
				<div class="task-item">
					Task:<br>
					...
				</div>
				<div class="task-item">
					Input:<br>
					...
				</div>
				<div class="task-item">
					Output:<br>
					...
				</div>
				<div class="task-item">
					Code:<br>
					...
				</div>
			</div>
		<?php require 'view/footer.php'; ?>

<?php


var_dump($map);
