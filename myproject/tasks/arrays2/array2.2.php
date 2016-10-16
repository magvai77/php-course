
<?php 
function arrayRand($array) 
{
	$count = count($array);
	$newarray = array_fill(0, $count, 0);
	foreach ($array as $key => $value) {
		while (1) {
			$a = mt_rand(0,$count - 1);
			if ($newarray[$a] == 0 and $a != $key) {
				$newarray[$a] = $value;
				break;
			}
		}
	}
	return $newarray;
}
var_dump(arrayRand([1,2,3,4,555,6,788,8,955,10,11,12]));
