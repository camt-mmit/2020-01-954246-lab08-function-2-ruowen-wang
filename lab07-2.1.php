<?php
function power($b,$n){
    $p=pow($b,$n);
    return $p;
}
    $a=$argv[1];
    $B=$argv[2];
    $c=$argv[3];
    $d=$argv[4];
    $P=$argv[5];
    $q=$argv[6];
    $r=$argv[7];
    $ab=$argv[1]+$argv[2];
   $result1=power($ab,$P);
    $cd=$argv[3]+$argv[4];
    $result2=power($cd,$q);
    $abcd=$result1+$result2;
    $result=power($abcd,$r);
    printf("%d",$result);
