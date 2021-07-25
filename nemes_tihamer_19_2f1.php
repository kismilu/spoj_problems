<?php

/* nt19-2f1

Időpontok
Egy éven belül egy időpontról megadhatjuk, hogy az év hányadik hetére, a hét hányadik napjára
esik, s azon belül hány óra, hány perc, hány másodperckor volt.
Készíts programot, amely megadja két időpont távolságát, valamint egy újabb időpontot, amelyik
a későbbitől ugyanolyan messze van, mint a későbbi a korábbitól!
Bemenet
A standard bemenet két sorában a két időpont szerepel. Mindegyik 5 számmal írható le
(1≤Hét≤25, 1≤Nap≤7, 0≤Óra≤23, 0≤Perc≤59, 0≤Másodperc≤59).
Kimenet
A standard kimenet első sorába a két időpont távolságát, a másodikba pedig egy újabb
időpontot kell írni, amelyik a későbbitől ugyanolyan messze van, mint a későbbi a korábbitól!
Példa
Bemenet 
5 2 15 8 14
3 3 12 7 18
Kimenet
1 6 3 0 56
7 1 18 9 10
*/

fscanf(STDIN, "%d %d %d %d %d\n" ,$het,$nap,$ora, $perc, $masodperc);
fscanf(STDIN, "%d %d %d %d %d\n" ,$het2,$nap2,$ora2, $perc2, $masodperc2);

$mp1 = $het*7*24*60*60 + $nap*24*60*60 + $ora*60*60 + $perc*60 + $masodperc;
$mp2 = $het2*7*24*60*60 + $nap2*24*60*60 + $ora2*60*60 + $perc2*60 + $masodperc2;

if($mp2 > $mp1) {
	$kul = $mp2 - $mp1;
	$h = floor($kul / (7*24*60*60));
	$n = floor(($kul % (7*24*60*60))/(24*60*60));
	$o = floor(($kul % (7*24*60*60)) % (24*60*60) / (60*60));
	$p = floor((($kul % (7*24*60*60)) % (24*60*60) % (60*60))/60);
	$m = floor((($kul % (7*24*60*60)) % (24*60*60) % (60*60))%60);

	echo($h . ' ' . $n . ' ' . $o . ' ' . $p . ' ' .$m);
	$ujm = $m + $masodperc2;
	if($ujm >=60) {
		$ujm = $ujm - 60;
		$p = $p + 1;
	}
	
	$ujp = $p + $perc2;
	if($ujp >=60) {
		$ujp = $ujp - 60;
		$o = $o + 1;
	}
	
	$ujo = $o + $ora2;
	if($ujo >= 24) {
		$ujo = $ujo - 24;
		$n = $n + 1;
	}
	
	$ujn = $n + $nap2;
	if($ujn >= 8) {
		$ujn = $ujn - 7;
		$h = $h + 1;
	}
	
	$ujh = $h + $het2;
	if($ujh >= 26) {
		$ujh = $ujh - 25;
	}

} else {
	$kul = $mp1 - $mp2;
	$h = floor($kul / (7*24*60*60));
	$n = floor(($kul % (7*24*60*60))/(24*60*60));
	$o = floor(($kul % (7*24*60*60)) % (24*60*60) / (60*60));
	$p = floor((($kul % (7*24*60*60)) % (24*60*60) % (60*60))/60);
	$m = floor((($kul % (7*24*60*60)) % (24*60*60) % (60*60))%60);
	
	echo($h . ' ' . $n . ' ' . $o . ' ' . $p . ' ' .$m);
	$ujm = $m + $masodperc;
	if($ujm >=60) {
		$ujm = $ujm - 60;
		$p = $p + 1;
	}
	
	$ujp = $p + $perc;
	if($ujp >=60) {
		$ujp = $ujp - 60;
		$o = $o + 1;
	}
	
	$ujo = $o + $ora;
	if($ujo >= 24) {
		$ujo = $ujo - 24;
		$n = $n + 1;
	}
	
	$ujn = $n + $nap;
	if($ujn >= 8) {
		$ujn = $ujn - 7;
		$h = $h + 1;
	}
	
	$ujh = $h + $het;
	if($ujh >= 26) {
		$ujh = $ujh - 25;
	}
	
}
echo("\n");
echo($ujh . ' ' . $ujn . ' ' . $ujo . ' ' . $ujp . ' ' .$ujm);