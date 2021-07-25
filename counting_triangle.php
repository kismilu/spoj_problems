<?php
fscanf (STDIN, "%d\n", $test );
for($i=0;$i<$test;$i++) {
	
	fscanf(STDIN,"%d\n",$n);
	$sum = round((($n)*($n+2)*(2*$n+1))/8, 0);
	echo $sum."\n";
}



?>