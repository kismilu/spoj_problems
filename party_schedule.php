<?php
 

function maxErtek( $x, $y ) {
	    if ( $x > $y )
	        return $x;
	    else
	        return $y;
}

for(;;) {
	fscanf(STDIN, "%d %d", $maxkolt, $partik);
 
	if ($maxkolt == 0 && $partik ==0) {break;}
 
	for($i=0; $i<$partik+1 ;$i++) {
	    fscanf(STDIN, "%d %d", $s[$i], $f[$i]);
	}
 
	for($i=0;$i<=$partik;$i++)
	for($j=0;$j<=$maxkolt;$j++) { $H[$i][$j]=0;}
	
	for($i=0;$i<=$partik;$i++) { $H[$i][0]=0; }
	
	for($i=0;$i<=$maxkolt;$i++){ $dp[0][$i]=0; }
	
	for ( $i0 = 1; $i0 < $partik+1; $i0++) {
	    $i=$i0-1;
	    for ($w= 1; $w < $maxkolt+1; $w++) {
 
	        if ($s[$i]>$w) {
	            $H[$i0][$w] = $H[$i0-1][$w];
	        } else {
	            $H[$i0][$w] = maxErtek ($H[$i0-1][$w], $f[$i] + $H[$i0-1][$w-$s[$i]]);
	        }
 
	    }
 
	}
 
	$osszfont = $H[$partik][$maxkolt];
	$kolt = 0;
 
	for ( $i=0; $i<$maxkolt; $i++) {
	    if ( $H[$partik][$i] == $osszfont ) {
	        $kolt = $i;
	        break;
	    }
	}
 
	print_r ($kolt." ".$osszfont."\n");
}
?>