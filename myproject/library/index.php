<?php
function getTaskMap()
{
return [
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

}

function getTaskTitle($section, $taskNumber) 
{
	$tasksMap = getTaskMap();
	$sectionData = $tasksMap[$section];
	$titleChunks = [
		$sectionData['title'],
		$taskNumber
	];
	return implode(' -> ', $titleChunks);
	}

function getTask($section, $taskNumber)
{
		
	$taskMap = getTaskMap();
	$title = getTaskTitle($section, $taskNumber);

	require __DIR__ . '/../tasks/' . $section . '/' . $taskNumber . '.php';
return [
	'title' => $title,
	'description' => $description,
	'inputData' => $inputData,
	'result' => $result
];
}

