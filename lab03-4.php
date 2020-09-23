
<?php   
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
   do{$i == 0;
      $e="e";
      $i+=1;
      printf("Input score $i('e' for end of data): ");
      fscanf(STDIN, "%s\n", $data);
      $arr[$i]=$data;
      
}while($data!=$e);  

if($i==1) {
   echo"No data!!! "; 
   goto end;
   }
$ave=array_sum($arr)/(count($arr)-1);
echo"The average score for ";
if($i==2){
    printf("%.2f=",$arr[1]); 
 }
 if($i==3){
   printf("%.2fand%.2f=",$arr[1],$arr[2]); 
 }
if($i>3){
   for($j=1;$j<=$i-3;$j++)
   {  
      printf("%.2f,",$arr[$j]);
   }
$p=$i-2;
$q=$i-1;
printf("%.2f and %.2f=",$arr[$p],$arr[$q]);
}
 printf("%.2f",$ave);
end:
?>
