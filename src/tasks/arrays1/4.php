<?php 
function duplicate($array)
{
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

$result = duplicate([1,435,5,4,4,3,6,7,545,6,657]);
$description = 'Определите, есть ли в массиве повторяющиеся элементы.';
$inputData = '[1,435,5,4,4,3,6,7,545,6,657]';
