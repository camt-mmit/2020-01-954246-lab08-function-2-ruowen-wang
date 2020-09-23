<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
    echo "Input number of students: ";
    fscanf(STDIN, "%d", $n);
    echo "Input number of chapters: ";
    fscanf(STDIN, "%d", $nchpt);
    
    $name = "%s";
    for($i = 0; $i < $nchpt; $i++) {//名字 是字符串，后面是浮点
        $name .= " %f";
    }
    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( name", $i + 1);
        for($j = 0; $j < $nchpt; $j++) {
            printf(" chpt%d", $j + 1);
        }
        printf(" ): ");
        $scores[] = fscanf(STDIN, $name);
    }
    printf("\n");
    printf("Result:\n");

    $p=1;
    printf("  %12d",$p);
   
    for($i = 1; $i < $nchpt; $i++){
    printf("  %5d",$i+1);
    }
    printf("\n");
    
    echo"----------";
    for($i =1; $i <=$nchpt; $i++){
        printf("-------");
        }
    echo"------";
        printf("\n");

    foreach($scores as $i => $chpts) {
        printf("%6s:",$chpts[0]);
        $total = 0; array_shift($chpts);
        foreach($chpts as $chpt) {
         
            $total += $chpt;
            printf(" %6.2f", $chpt);
        }
        printf(" = %6.2f\n", $total);
    }