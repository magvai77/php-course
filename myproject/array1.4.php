<?php 
$array = [1,435,5,4,6,3,4,4,545,6,657];
$count = count($array);
//echo "Всего значений: $count <br/>";
$uniq = 0;

foreach (array_unique($array) as $value) {
	$value = $uniq++;
}
//echo " Уникальных значений: $uniq <br/>";
if ($count == $uniq) {
	echo "Ура! Повторяющихся значений нет!";
}
else {
	echo "Повторяющиеся значения есть, их " . ($count - $uniq) . " <br/>";
 }
