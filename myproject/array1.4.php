<?php 
$array = [1,435,5,4,6,3,4,4,545,6,657];
$count = count($array);
//echo "����� ��������: $count <br/>";
$uniq = 0;

foreach (array_unique($array) as $value) {
	$value = $uniq++;
}
//echo " ���������� ��������: $uniq <br/>";
if ($count == $uniq) {
	echo "���! ������������� �������� ���!";
}
else {
	echo "������������� �������� ����, �� " . ($count - $uniq) . " <br/>";
 }
