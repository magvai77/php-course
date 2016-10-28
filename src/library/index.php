<?php

require_once __DIR__ . '/../classes/Task.php';

function getTaskMap()
{
return [
			"loops" => [
				"title" => "Loops",
				"tasks" => [
					1,
					2,
					3,
					4,
					5,
					6
				]
			],
			"arrays1" => [
				"title" => "Arrays 1",
				"tasks" => [1,
					2,
					3,
					4,
					5,
					6
				]
			],
			"arrays2" => [
				"title" => "Arrays 2",
				"tasks" => [
					1,
					2,
					3,
					4,
					5,
					6
				]
			],
			"function" => [
				"title" => "Function",
				"tasks" => [
					1,
					2,
					3,
					4,
					5
				]
			],
			"mysql" => [
				"title" => "MySQL",
				"tasks" => [
					1,
					2,
					3
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
	$description = '';
	$categoryCode = $section;
	$task = new Task($taskNumber, $categoryCode, $description);
	$inputData = [];
	$result = $task->run($inputData);
	
	
	return [
		'title' => $title,
		'description' => $task->getDescription(),
		'inputData' => '',
		'result' => $result
	];
}

