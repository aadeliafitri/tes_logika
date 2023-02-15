<?php
$x = [1,4,1,2,4,2,7,9,4,5];
// array_flip($x);

	for ($i=0; $i < count($x); $i++) { 
		$total = $x[$i];
		for ($j=0; $j < $total ; $j++) { 
			// $x[$i][$j];
			echo "#";
		}
		echo "<br>";
	}
			
?>