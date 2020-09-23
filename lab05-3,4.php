<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
/**
 * goto is an anti-pattern so DO NOT use it.
 * Try to don't use goto in your code.
 */
    for($i = 0; $i>=0; $i++) {
   
    $data=null;
    b:; 
    $name= Null;
    printf("Student %2d :(name grade, enter for end of data):  ", $i+1 );
    fscanf(STDIN, "%s %s",$name,$data);
   $arr[$i]=$name;
  $arr1[$i]=$data;

    if (empty($name)==true) {
    goto a;}
    if (empty($data)==true){
    printf("Please input A, B, C, D or F for grade!!! \n") ;
 goto b;
    }  
    if($data!="A"&$data!="B"&$data!="C"&$data!="D"&$data!="F"){
      printf("Please input A, B, C, D or F for grade!!! \n") ;
 goto b;
    }
  }
a:;
array_pop($arr);
array_pop($arr1);
  
$x=0;
foreach($arr1 as $k=>$value){
  if ($value=="A"){
     $x++;
     $namea[]=$arr[$k];
  }
}
printf("A(%d):",$x);
if($x==0) goto c;
else {$nam=array_values($namea);
foreach($nam as $v){
  printf("%s ",$v);
}}
c:;
$ave1=4*$x;

$x=0;
foreach($arr1 as $k=>$value){
  if ($value=="B"){
     $x++;
     $nameb[]=$arr[$k];
  }
}
printf("\nB(%d):",$x);
if($x==0) goto d;
else{$nam=array_values($nameb);
foreach($nam as $v){
  printf("%s ",$v);
}}
d:;
$ave2=3*$x;


$x=0;
foreach($arr1 as $k=>$value){
  if ($value=="C"){
     $x++;
     $namec[]=$arr[$k];
  }
}
printf("\nC(%d):",$x);
if($x==0) goto e;
else{$nam=array_values($namec);
foreach($nam as $v){
  printf("%s ",$v);
}}
e:;
$ave3=2*$x;


$x=0;
foreach($arr1 as $k=>$value){
  if ($value=="D"){
     $x++;
     $named[]=$arr[$k];
  }
}
printf("\nD(%d):",$x);
if($x==0) goto f;
else {$nam=array_values($named);
foreach($nam as $v){
  printf("%s ",$v);
}}
f:;
$ave4=1*$x;


$x=0;
foreach($arr1 as $k=>$value){
  if ($value=="F"){
     $x++;
     $namef[]=$arr[$k];
  }
}
printf("\nF(%d):",$x);
if($x==0) goto g;
else{$nam=array_values($namef);
foreach($nam as $v){
  printf("%s ",$v);
}}
g:;
$ave5=0*$x;
$total=$ave1+$ave2+$ave3+$ave4+$ave5;
$ave=$total/$i;
printf("\n%.2F",$ave);
