<?php
$count = 87;
for ($i=35; $i <= $count; $i++) { 
	if ($i % 7 == 1 or $i % 7 == 2 or $i % 7 == 5) {
		echo "$i <br/>";
	}
}
