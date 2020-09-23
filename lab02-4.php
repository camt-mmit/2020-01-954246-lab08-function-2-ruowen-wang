<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input size:");
fscanf(STDIN,"%d",$x);
for($j=$x;$j>=1;$j-=1){
    for($i=1;$i<$j;$i+=1){
        echo" ";
        
    }
    for($q=$i;$q<=$x;$q+=1){
        echo"*";
    }
    echo"\n";
}
?>