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
echo $result;
