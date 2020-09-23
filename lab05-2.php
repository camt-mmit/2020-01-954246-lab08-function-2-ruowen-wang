<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
  for($i=1;$i>0;$i++){
    printf("data%d\n\t",$i);

$pre=null;
    printf("Name Prefix (0: Mr., 1: Miss., 2: Mrs.): ");
    fscanf(STDIN, "%s", $pre);
    if($pre=="0")$pre="Mr.";
    if($pre=="1") $pre="Miss.";
    if($pre=="2") $pre="Mrs.";
    /**
     * goto is an anti-pattern so DO NOT use it.
     * We don't use goto in modern programming language
     * because we have structural syntax and goto will destroy
     * our structure.
     * In this case you can use break instead of goto.
     */
    //if ($pre==null) goto a;
    if ($pre==null) break;
   $arr[$i][]=$pre;

    printf("                                     First Name: ");
    fscanf(STDIN, "%s\n",$fi);
    $arr[$i][]=$fi;

    printf("                                      Last Name: ");
    fscanf(STDIN, "%s\n", $la);
    $arr[$i][]=$la;

    printf("    Gender (0: Male, 1: Female ,2: Transgender): ");
    fscanf(STDIN, "%s\n", $ge);
    if($ge=="0")$ge="Male";
    if($ge=="1") $ge="Female";
    if($ge=="2") $ge="Transgender";
    $arr[$i][]=$ge; 

    for($m=1;$m>0;$m++){
        $ph= Null;
        printf("                          Phone Number%d: ",$m);
        /**
         * Format of phone number must be %s
         * in the case of 0 leading.
         */
        //fscanf(STDIN, "%d\n", $ph);
        fscanf(STDIN, "%s\n", $ph);
        $arry[$i][]=$ph;
        if (empty($ph)==true) 
        // use break instead of goto.
        //goto b;
        break;
    }
        // no lable here
        //b:;

}
// no label here
//a:;
for($j=1;$j<$i;$j++){
    
        
   echo"---------------------------------------------------\n";
   printf("%s %s %s \n",$arr[$j][0],$arr[$j][1],$arr[$j][2]);
   printf("Gender:%s\n",$arr[$j][3]);
   printf("phone number:");
   for($y=0;$y<count($arry);$y++){
    printf("%s",$arry[$j][$y]);
    if($y<count($arry[$j])-2){
    echo",";
    }
   }
    
   echo"\n";

  
        
    
}

echo"---------------------------------------------------\n";
