<?php
function getBooksArray($file)
{
	$books = fopen($file, "r");
	while (($a = fgets($books)) !== false) {
		$b = explode('|', $a);
		$array[] = [
				"title"  =>  $b[0],
				"autor"  =>  $b[1],
				"print"  =>  $b[2],
				"status" => $b[3]
		];
	}
	return $array;
	fclose($books);
}

function bookStatus($file,$status)
{
	$array = getBooksArray($file);
		foreach ($array as $key => $value) {
			if ($array[$key]['status'] == $status) {
				echo "<br/>Книга: " . $array[$key]['title'] . "<br/>Автор: " . $array[$key]['autor'] . "<br/>Издательство: " . $array[$key]['print'] . "<br/>Статус: " . $array[$key]['status'] .  " <br/>";
			}
		}
}

function bookslist($file) 
{
	$array = getBooksArray($file);
		foreach ($array as $key => $value) {
			echo "<br/>Книга: " . $array[$key]['title'] . "<br/>Автор: " . $array[$key]['autor'] . "<br/>Издательство: " . $array[$key]['print'] . "<br/>Статус: " . $array[$key]['status'] .  " <br/>";
		}
}


bookslist("books.txt");
bookStatus("books.txt", 0);
getBooksArray("books.txt");
