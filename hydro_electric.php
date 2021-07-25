<?php
fscanf(STDIN, "%d\n", $k);
for ($m=0; $m < $k; $m++) {
	fscanf(STDIN, "%d\n", $n);
	$line = fgets(STDIN) ;
	$T=explode(" ",$line) ;
	
	$e = 0;
	$v = $n-1;
	$viz = 0;
	$maxe = $T[$e];
	$maxv = $T[$v];
	
	while ($e < $v) {
		if ($maxe < $maxv) {
			$e++;
			if ( $T[$e] > $maxe ) {
				$maxe = $T[$e];
			} else { 
				$viz = $viz + ($maxe - $T[$e]); 
			}
		} else {
			$v--;
			if ($T[$v] >= $maxv) {
				$maxv = $T[$v];
			} else {
				$viz = $viz + ($maxv - $T[$v]);
			}
		}
	}
	
	print_r($viz);
	print_r("\n");
}
	
?>