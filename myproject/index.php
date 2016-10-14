<?php
$path = '';
if (!empty($_GET['path'])) {
	$path = $_GET['path'];

	$pathchunks = explode('-', $path);
	$map = [
		"loops" => [
			"title" => "Loops",
			"tasks" => ["1.php",
						"2.php",
						"3.php",
						"4.php",
						"5.php",
						"6.php"
			]
		],
		"arrays1" => [
			"title" => "Arrays 1",
			"tasks" => ["1.php",
						"2.php",
						"3.php",
						"4.php",
						"5.php",
						"6.php"
			]
		],
		"arrays2" => [
			"title" => "Arrays 2",
			"tasks" => ["1.php",
						"2.php",
						"3.php",
						"4.php",
						"5.php",
						"6.php"
			]
		]
	];
	var_dump($map);
	$section = $pathchunks[0];
	$tasks = $pathchunks[1];

	require __DIR__ . '/tasks/' . $section . '/' . $tasks . '.php';
}
?>

<?php require 'view/header.php'; ?>
		<?php require 'view/menu.php'; ?>
			<div class="workplace">
				<h1>Loops</h1>
				<div class="task-item">
					Task:<br>
					<?php echo $description ?>
				</div>
				<div class="task-item">
					Input:<br>
					<?php echo $inputdata ?>
				</div>
				<div class="task-item">
					Output:<br>
					<?php echo $result ?>
				</div>
				<div class="task-item">
					Code:<br>
				</div>
			</div>
		<?php require 'view/footer.php'; ?>

<?php
