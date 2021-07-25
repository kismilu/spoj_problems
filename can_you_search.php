<?php
fscanf(STDIN, "%d\n", $k);
for ($m=0;$m<$k;$m++) {
fscanf(STDIN, "%d %d\n", $n, $q);
$line = fgets(STDIN) ;
$T=explode(" ",$line) ;
$line = fgets(STDIN) ;
$TO=explode(" ",$line) ;
for ($i=0;$i<$q;$i++) $M[$TO[$i]]=0 ;
$min=100001 ;
$utamh=0 ;
ksort($M) ;
foreach ($M as $key => $tokmindegy) {
	for ($j=$utamh;$j<$key;$j++) {
		if ($T[$j]<$min) $min=$T[$j] ;
	} 
	$utamh=$j ;
	$M[$key]=$min ;
}
	foreach ($TO as $tokmindegy => $l) if ($M[$l]>-1) echo trim($M[$l])."\n" ;
}
?>