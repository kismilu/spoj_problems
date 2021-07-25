<?php

/*nt17-2f2

Ritka számoknak nevezzük azokat a természetes számokat, amelyek kettes számrendszerbeli alak-jában sehol sincs egymás mellett két szomszédos 1-es számjegy.
Készíts programot, amely megadja az N. ritka számot!
A standard bemenet első sorában N értéke van (1≤N≤100000). 
A standard kimenet egyetlen sorába az N. ritka számot kell kiírni! 
Példa:
bemenet	kimenet
3	2
bemenet	kimenet
20	41*/

$N = 10;
//fscanf(STDIN, "%d" ,$N);
$ritkaszam = 3;
$szam = 4;
if($ritkaszam <= $N){
	while($ritkaszam != $N){
		
		$str = decbin($szam);

		
		$arr1 = str_split($str);
		$len = mb_strlen($str, "UTF-8");
		$szam++;
		for($i=1;$i<$len-1;$i++) {
			$jelzo = 0;
			if (( ($arr1[$i] == $arr1[$i-1] && $arr1[$i] == "1") || ($arr1[$i] == $arr1[$i+1] && $arr1[$i] == "1") )) {
				$jelzo = 1;
				break;
			}
		}
		
		if ($jelzo == 0){
			$ritkaszam++;
		}
		
		
	}
	echo ($szam-1);
} else if($N == 2 ) {
	echo(2);
} else if($N == 1 ){
	echo(1);
} else {
	echo 0;
}
