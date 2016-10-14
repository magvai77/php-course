<?php
$path = '';
$flag = false;
if (!empty($_GET['path'])) {
	$path = $_GET['path'];
	$flag = true;
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
		],
				"function" => [
			"title" => "Function",
			"tasks" => ["1.php",
						"2.php",
						"3.php",
						"4.php",
						"5.php"
			]
		]
	];

	$pathchunks = explode('-', $path);

	$section = $pathchunks[0];
	$tasks = $pathchunks[1];

	$sectionData = $map[$section];
	$taskName = $tasks;
	$titlechunks = [
		$sectionData['title'],
		$taskName
	];

	$pagetitle = implode(' -> ', $titlechunks);

	require __DIR__ . '/tasks/' . $section . '/' . $tasks . '.php';

}
?>


<?php require 'view/header.php';
require 'view/menu.php'; ?>
	
	<div class="workplace">
 		<?php if ($flag == true) { ?>
				<h1> <?php echo $pagetitle ?></h1>
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
			<?php  } else {?>
			<img src="/html/images/pikachu.jpg">
			<?php } ?>
		<?php require 'view/footer.php'; ?>

