<?php

/* nt19-2f23

Ismerjük N napra a déli hőmérséklet értékét. Lokálisan melegnek nevezünk egy napot (az első és
az utolsó kivételével), ha az aznap mért érték nagyobb volt a két szomszédjánál, lokálisan hidegnek pedig azt, amelyiken mért érték kisebb volt a két szomszédjánál.
Írj programot, amely megadja, hogy hány olyan folytonos időszak van az N nap alatt, amely időszakon belül pontosan K lokálisan meleg és L lokálisan hideg nap volt!
Bemenet
A standard bemenet első sorában a napok száma (1≤N≤100 000), valamint a K és az L
érték van (1≤K,L≤1000). A második sorban az N napon mért hőmérséklet (-100≤Hi≤100)
található.
Kimenet
A standard kimenet első sorába azon időszakok számát kell írni, amely időszakon belül
pontosan K lokálisan meleg és L lokálisan hideg nap volt!
Példa
Bemenet 
13 2 1
1 1 2 1 0 0 2 0 1 2 1 0 1
Kimenet
14
*/

fscanf(STDIN, "%d %d %d\n", $N, $K, $L); 

$line = fgets(STDIN) ; 
$napok=explode(" ",$line) ;  

$szamlalo = 0;

for($i = 1; $i<= $N-1; $i++) {
	$KL = 0;
	$LL = 0;
	$j = $i;
	for($j ; $j <= $N-1; $j++) {
		if($napok[$j] > $napok[$j-1] && $napok[$j] > $napok[$j+1]) {      
		$KL++;
		}
		
		if($napok[$j]< $napok[$j-1] && $napok[$j] < $napok[$j+1]) {     
		$LL++;
		}
		
		if($KL == $K && $LL == $L){		
			$szamlalo++;
		}
		if($KL == $K+1 || $LL == $L+1) {	
			break;
		}
		
	}
}

echo $szamlalo;