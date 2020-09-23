<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input menu(nember): ");
fscanf(STDIN,"%d",$x);
switch($x)
{
    case 1:
        printf("input number(price %%discount): ");
        fscanf(STDIN, "%d %d", $price, $discount);
        $discount_cost= $price*$discount*0.01;
        $netprice = $price-$discount_cost;
        printf("price %.2f discount %.2f net price is: %.2f\n", $price, $discount_cost, $netprice);  
    break;
    case 2:
        printf("input data(number1 number2): ");
        fscanf(STDIN,"%f %f",$a,$b);
        if($a> $b) printf("%d greater than %d",$a,$b);
        elseif ($a<$b) printf("%d less than %d",$a,$b);
        else printf("%d equal to %d",$a,$b);
    break;
    case 3:
        printf("exit");
    break;

}
?>