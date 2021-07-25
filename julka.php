<?php

//SPOJ - Julka

$t = 1;
for($i = 0; $i < $t; $i++){
    fscanf(STDIN, "%d\n" ,$ossz);
    fscanf(STDIN, "%d\n" ,$d);

    $Klau = ($ossz + $d) / 2;
    $Natalia = ($ossz - $d) /2;
    echo($Klau."\n".$Natalia."\n");
}


?>