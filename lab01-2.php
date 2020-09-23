<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input data(number1 number2): ");
fscanf(STDIN,"%f %f",$a,$b);
if($a> $b) printf("%d greater than %d",$a,$b);
elseif ($a<$b) printf("%d less than %d",$a,$b);
else printf("%d equal to %d",$a,$b);
