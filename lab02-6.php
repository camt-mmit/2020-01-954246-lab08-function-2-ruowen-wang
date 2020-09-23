<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input namber:");
fscanf(STDIN,"%d",$n);
for($i=1;$i<=$n;$i+=1){
    for($j=1;$j<=$n-$i;$j+=1){
        echo " ";
    }
    for($k=1;$k<=2*$i-1;$k+=1){
            if($k==1 || $k==2*$i-1){
                echo "*";
            }else{
                echo " ";
        }
    }echo "\n";
}
for($i=$n;$i>1;$i-=1){
    for($j=0;$j<=$n-$i;$j+=1){
        echo " ";
    }
    for($k=1;$k<=2*$i-3;$k+=1){
        if($k==2*$i-3 || $k==1){
            echo "*";
        }else{
            echo " ";    
        }
    }
echo "\n";
}
?>