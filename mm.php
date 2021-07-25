<?php

//SPOJ - M&M Game

fscanf(STDIN, "%d\n", $t);

for($i=0; $i<$t; $i++) {
	
	fscanf(STDIN, "%d\n", $n);
	
	$line = fgets(STDIN) ;
	$kupac=explode(" ",$line) ;
	$sum = 0;
	$sum2 = 0;
	
	for($u=0 ; $u < $n ; $u++) {
		$sum += $kupac[$u];
	}
	
	if ($sum == $n) {
		if ($sum%2==0) echo "John\n";
		else echo "Brother\n";
	} else {
		for ($u=0 ; $u<$n ; $u++) {
			$sum2 ^= $kupac[$u];
		}
		
		if ($sum2 == 0) echo "Brother\n";
		else echo "John\n";
	}
	
	
}




?>