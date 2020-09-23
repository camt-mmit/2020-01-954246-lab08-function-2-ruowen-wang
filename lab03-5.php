<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("Input the number of grades: ");
fscanf(STDIN, "%d\n", $x);
echo"Input grade data from max score to min score \n";

for($i=1;$i<=$x;$i++){
printf("%d:Input grade data from max score to min score:  ",$i);
fscanf(STDIN, "%s %d\n", $grade,$minscore);
$M[]=$minscore;
$G[]=$grade;
}

do{$j == 0;
   $e="e";
   $j+=1;
   printf("Input score $j('e' for end of data): ");
   fscanf(STDIN, "%s\n", $data);
   $arr[$j]=$data;
// You have to check 'e' before evaluate grade.
if($data === 'e') break;

if($data>=0&&$data<$M[0]){
 if($data>=0&&$data<$M[1]){
   if($data>=0&&$data<$M[2]){
     if($data>=0&&$data<$M[3]){
        echo"Grade is= $G[4]\n";
           }
        else echo"Grade is $G[3]\n";
       }
     else echo"Grade is $G[2]\n";
    }
   else echo"Grade is $G[1]\n";
  }
else echo"Grade is $G[0]\n";

}while($data!=$e);  

if($j==1) {
echo"No data!!! "; 
goto end;
}
array_pop($arr);
$ave=array_sum($arr)/(count($arr));
echo"The summary score for ";
   if($j==2){
    printf("%.2f\n",$arr[1]); 
 }
      if($j==3){
         printf("%.2fand%.2f\n",$arr[1],$arr[2]); 
 }
         if($j>3){
           for($m=1;$m<=$j-3;$m++)
   {  
               printf("%.2f,",$arr[$m]);
   } 
               $p=$j-2;
               $q=$j-1;
               printf("%.2f and %.2f\n",$arr[$p],$arr[$q]);
}
                   echo"average=";
                          printf("%.2f\n",$ave);
                               $n=count($arr);
                                  $count=0;
                                     foreach($arr as &$i){
                                       $count+=pow(($i-$ave),2);
}
                                          $v=$count/$n;
                                              printf("vaiance=%.2f\n",$v);
end:
?>
