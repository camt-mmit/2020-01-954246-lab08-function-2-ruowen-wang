<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
   function power($c) {
    $f = $c*9/5+32;
    return $f;
}
   function power1($c,$r){
    printf(" %6.2f %6.2f\n",$c,$r);
   }
   echo"Celsius Fahrenheit\n";
   $fin = fopen($_SERVER['argv'][1], 'r');
   fscanf($fin, "%d", $n);
   
   for($i=0;$i<$n;$i++){
       fscanf($fin, "%d %d %f", $start,$end,$step);
       for($j=$start;$j<=$end;$j+=$step){
       $result1=power($j);
       $result=power1($j,$result1);}}
