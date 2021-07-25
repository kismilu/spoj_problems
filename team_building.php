<?php
 
fscanf(STDIN,"%d", $test);
for($i=0;$i<$test;$i++) {
 
	fscanf(STDIN, "%d %d %d", $a[0],$a[1],$a[2]);
 
	sort ($a);
	if ( $a[2] >= ($a[0]+$a[1])*2 ) {
		echo $a[0]+$a[1];
		echo "\n";
	} else {
		
		echo floor (($a[0]+$a[1]+$a[2])/3);	
		echo "\n";
	}
 
}

?>