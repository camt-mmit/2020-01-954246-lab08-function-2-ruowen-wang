<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input nember: ");
fscanf(STDIN,"%d",$n);
for($j=0;$j<=11;$j+=1){
    for($i=2;$i<=$n;$i+=1){   
        printf("%5d",$y=$i+$i*$j);
    }
    echo"\n";
}
?>