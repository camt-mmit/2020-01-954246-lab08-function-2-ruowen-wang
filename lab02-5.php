<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input size:");
fscanf(STDIN,"%d",$x);
for($i=1;$i<=$x;$i+=1){
    echo"*";
}
echo"\n";
if($x>=3){
    do{
        $p==1;
        $p+=1;
        for($j=1;$j<=$x;$j+=1){
            if($j==1 || $j==$x){
            echo"*";
            }
            
            else{
                echo" ";
            } 
        }
        echo"\n";
    }
    while($p<=$x-3);}
    else {
        goto next;}
    next:
if($x!=1){
    for($q=1;$q<=$x;$q+=1){
        echo"*";}
    }
    else{
        goto end;
    }
    end:
?>