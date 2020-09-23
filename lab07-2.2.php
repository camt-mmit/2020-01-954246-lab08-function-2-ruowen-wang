<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
/**
 * This function is useless
 * because it does the same thing as pow().
 */
function power($b,$n){
    $p=pow($b,$n);
    return $p; 
}
$fin = fopen($_SERVER['argv'][1], 'r');
fscanf($fin, "%d", $N);
for($m=1;$m<=$N;$m++){
    fscanf($fin,"%d %d",$B[$m],$Y[$m]);
    $result[0]=0;
    $result[$m]=power($result[$m-1]-$B[$m],$Y[$m]);
}
printf("%d",$result[$N]);