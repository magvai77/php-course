<?php
$count = 10000;
for ($i=0; $i < $count; $i++) { 
	if (strpos($i, "3")!== false ) { 
		if ($i % 5 <> 0) {
			echo "$i <br/>";		
		}
	}
}

