<?php
	$data = 7;
	
	for ($i = $data; $i > 0; $i-- ) {
		
		for ($j = 0; $j < $i - 1; $j++ ) {
			
			echo "_";
		}
		
		for ($k = $data; $k > $i - 1; $k-- ) {
			echo "*";			
		}
		
		for ( $r = $data -1; $r > $k; $r-- ) {
			
			echo "*";
		}
		
		echo "<br>";
		
	}
?>