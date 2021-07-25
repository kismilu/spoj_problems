<?php

fscanf(STDIN, "%d", $test);

for($i=0; $i<$test; $i++) {
	
	fscanf(STDIN, "%d", $n);
	
	
	$f[1]=1;
	
	for ($j=2; $j<=100002; $j++) {
		
		$f[$j] = $f[$j-1] + 1/$j;
		
	}
	
	echo $f[$n]."\n";
	
}


?>