<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("Input size (n >= 1): ");
fscanf(STDIN,"%d",$n);
$n=$n-1;
for($i=$n;$i>=0;$i-=1){
for($j=0;$j<=$i;$j+=1){
   if($j==0||$i==$n){
   $arr[$i][$j]=1;
   }else {
   $arr[$i][$j]=$arr[$i+1][$j]+$arr[$i][$j-1];
   }
echo $arr[$i][$j]."\t";
}
echo "\n";
}


