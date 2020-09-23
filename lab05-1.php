<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
echo "Input number of data: ";
fscanf(STDIN, "%d", $n);
for($i=1;$i<=$n;$i++){
    printf("data%d\n\t",$i);

    printf("Name Prefix (0: Mr., 1: Miss.): ");
    fscanf(STDIN, "%s", $pre);
    if($pre=="0")$pre="Mr.";
    if($pre=="1") $pre="Miss.";
    $arr[$i][]=$pre;

    printf("                            First Name: ");
    fscanf(STDIN, "%s\n",$fi);
    $arr[$i][]=$fi;

    printf("                             Last Name: ");
    fscanf(STDIN, "%s\n", $la);
    $arr[$i][]=$la;

    printf("           Gender (0: Male, 1: Female): ");
    fscanf(STDIN, "%s\n", $ge);
    if($ge=="0")$ge="Male";
    if($ge=="1") $ge="Female";
    $arr[$i][]=$ge; 

    printf("                          Phone Number: ");
    /**
     * Format of phone number must be %s
     * in the case of 0 leading.
     */
    //fscanf(STDIN, "%d\n", $ph);
    fscanf(STDIN, "%sn", $ph);
    $arr[$i][]=$ph;
;}
for($j=1;$j<$i;$j++){
   echo"---------------------------------------------------\n";
   printf("%s %s %s \n",$arr[$j][0],$arr[$j][1],$arr[$j][2]);
   printf("Gender:%s\n",$arr[$j][3]);
   printf("Phone Number:%d\n",$arr[$j][4]);
  
   
}
echo"---------------------------------------------------\n";


