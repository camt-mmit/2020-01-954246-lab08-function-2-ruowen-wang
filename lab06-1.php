<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
    $fin = fopen($_SERVER['argv'][1], 'r');
    fscanf($fin, "%d", $n);
    printf("number of data %d\n",$n);
    for($i = 0; $i < $n; $i++) {
        fscanf($fin, "%s %f", $name, $number);
        printf("%6s: %9.6f \n", $name, $number);
        $arr[$i]=$number;
    }
    foreach($arr as $value){
        $sum+=$value;
        
    }
    $ave=$sum/$n;
    printf("Average score = %10.6f",$ave);
    fclose($fin);
    