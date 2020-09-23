<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
    printf("Input data (floor n): ");
    fscanf(STDIN, "%d %d", $floor, $n);
    
    $building  = []; 
    
    for($k = 0; $k < $floor; $k++) {
        $building[$k] = [];
        printf("Floor: %d\n", $k + 1);
        for($j = 0; $j < $n; $j++) {
            $building[$k][$j] = [];
            for($i = 0; $i < $n; $i++) {
                printf("\tInput number of people in zone %d-%d: ", $j + 1, $i + 1);
                fscanf(STDIN, "%d", $building[$k][$j][$i]);
            }
        }
    }
    
    printf("\nPeople on each floor:\n");
    for($k = 0; $k < $floor; $k++) {
        printf("Floor: %d\n", $k + 1);
        $total = 0; 
        for($j = 0; $j < $n; $j++) {
           printf("\t");
            for($i = 0; $i < $n; $i++){
                printf("%5d", $building[$k][$j][$i]);
                $total += $building[$k][$j][$i];
            }
            printf("\n");
        }
        printf("Number of people = %d\n", $total);
    }


 $floor=$floor-1;
    printf("\nPeople on each zone:\n");
    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++) {
            printf("\t zone %d-%d: \n", $j + 1, $i + 1);
       echo"\t     ";
  $total1=0;
 for($m=$floor;$m>=0;$m--){ 
   
     printf("\t%2d\n",$building[$m][$j][$i]);
     $total1+=$building[$m][$j][$i];
     echo"\t";
 }
 
printf("Number of people = %d\n", $total1);
      
    
    
       echo"  \n";
        }
    }