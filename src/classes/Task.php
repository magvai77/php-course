<?php

class Task
{
	public $category;
	public $title;
	public $description;
	
	public function __construct($category, $title, $description)
	{
		$this->category = $category;
		$this->title = $title;
		$this->description = $description;
	}
	public function run($data) 
	{
		require_once __DIR__ . "/../tasks/" . $this->category . "/" . $this->title . ".php";
		return taskFunction($data);
		// $result = '';
		// $count = !empty($inputData['count']) ? $inputData['count'] : 7;
		// for ($i=0; $i < $count; $i++) {
		// 	$result .= "<br/>Hello";
		// }
		// return $result;
	}

}

