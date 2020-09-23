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
echo"Celsius Fahrenheit"; 
printf(" ");
fscanf(STDIN,"%3d",$n);

for($n=$argv[1];$n<=$argv[2];$n+=$argv[3]){

$result1=power($n);
$result=power1($n,$result1);

}