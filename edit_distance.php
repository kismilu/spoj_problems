<?php

function dinp ( $A, $B, $n, $m) {
	
	for ($i = 0; $i <= $n; $i++) {
		for($j = 0; $j <= $m; $j++) {
		
			if ( $i == 0 ){
				$res[$i][$j] = $j;
			} else if ( $j == 0) {
				$res[$i][$j] = $i;
			} else if ( $A[$i-1]== $B[$j-1] ) {
				$res[$i][$j] = $res[$i-1][$j-1];
			} else {
				$res [$i][$j] = min($res[$i-1][$j],$res[$i-1][$j-1],$res[$i][$j-1])+1;
			}
			
		}
	}
	
	return $res[$n][$m];
}
fscanf (STDIN, "%d\n", $t);

for($k=0;$k<$t;$k++) {
fscanf (STDIN, "%s\n", $A);
fscanf (STDIN, "%s\n", $B);

$n = strlen($A);
$m = strlen($B);

echo dinp ( $A, $B, $n, $m)."\n";

}


?>