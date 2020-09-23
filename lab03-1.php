<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input number ");
fscanf(STDIN,"%d",$n);
$x=[];
if($n > 0) {
for($i==1;$i<$n;$i+=1)
{
  printf("input score %d: ",$i+1);
  fscanf(STDIN,"%f\n",$x[]);

};

printf( "The average score = %.2f",$ave=array_sum($x)/$n);
} else {
  printf("No data!!!\n");
}
?>