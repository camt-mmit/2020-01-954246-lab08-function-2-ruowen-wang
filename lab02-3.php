<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input size:");
fscanf(STDIN,"%d",$x);
for($j=1;$j<=$x;$j+=1){
    for($i=$j;$i>=1;$i-=1){
        echo"*";
    }
    echo"\n";
}
?>