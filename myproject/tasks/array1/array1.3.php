<?php 
function sumProduct() {

$array = [1,435,5,4,6,3,4,4,545,6,657];

$a = 0;
$b = 1;
foreach ($array as $value) {
	$a += $value;
	$b *= $value;
}
$result = "Sum no function: $a <br/> Product  no function: $b <br/>Sum function: " . array_sum($array) . "<br/>Product function: " . array_product($array);
return $result;
}
$result = sumProduct();
echo $result;
