<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
A:
printf("input menu(nember): ");
fscanf(STDIN,"%d",$x);
if($x=="1")
{
    printf("input number(price %%discount): ");
    fscanf(STDIN, "%d %d", $price, $discount);
    $discount_cost= $price*$discount*0.01;
    $netprice = $price-$discount_cost;
    printf("price %.2f discount %.2f net price is: %.2f\n", $price, $discount_cost, $netprice);  
    goto A;
}
if($x=="2")
{
    printf("input data(number1 number2): ");
    fscanf(STDIN,"%f %f",$a,$b);
    if($a> $b) printf("%d greater than %d\n",$a,$b);
    elseif ($a<$b) printf("%d less than %d\n",$a,$b);
    else printf("%d equal to %d\n",$a,$b);
    goto A;
}
if($x=="3")
{
    goto end;
}
else
{
printf("Invalid menu number!!! \n");
goto A;
}
end:
?>