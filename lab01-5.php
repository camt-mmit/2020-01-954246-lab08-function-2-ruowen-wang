<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input usage unit: ");
fscanf(STDIN,"%f",$x);
if ($x==0) 
{
    printf("price of electricity bill =0 ");
    goto a;
}
if( $x>="1" && $x<="5")
{
    printf("price of electricity bill =10 ");
   goto a;
}
if( $x>="6" && $x<="10")
{$a=-5;
   $y=3*$x;
   $z=$a+$y;
   printf("price of electricity bill =%u",$z);
   goto a;
}
 if( $x>="11" && $x<="15")
   
   {     $a=-25;
      $y=5*$x;
      $z=$a+$y;
       printf("price of electricity bill =%u",$z);
       goto a;
   }
   if ( $x>="16");

   {    $a=-100;
   $y=10*$x;
   $z=$a+$y; 
       printf("price of electricity bill =%u",$z);
   }
   a:
   ?>