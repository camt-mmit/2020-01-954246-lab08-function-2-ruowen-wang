<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input number ");
fscanf(STDIN,"%d",$n);
$datas = [];
for($i = 0; $i < $n; $i++) {
    printf("Input score %2d: ", $i + 1);
    fscanf(STDIN, "%f\n", $datas[]);
}
if($n > 0) {
  $total = 0;
        foreach($datas as $data) 
        $total += $data;
        $avg = $total / count($datas);

        printf("The average score for ");
        foreach($datas as $i => $data) {
            $delim = "";
            // You have to use && instead of &
            // if($i > 0 & $i<$n-1) $delim = ", ";
            // if($i==$n-1 & $n!=1) $delim="and";
            if($i > 0 && $i<$n-1) $delim = ", ";
            if($i==$n-1 && $n!=1) $delim=" and ";
            printf("%s%.2f", $delim, $data);
        }
        printf(" = %.2f\n", $avg);

    }else {
    printf("No data!!!\n");
  }
  ?>