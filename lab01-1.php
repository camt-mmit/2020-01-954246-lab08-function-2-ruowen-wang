<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
printf("input data(price %%discount): ");
fscanf(STDIN, "%d %d", $price, $discount);
$discount_cost= $price*$discount*0.01;
$netprice = $price-$discount_cost;
printf("price %.2f discount %.2f net price is: %.2f\n", $price, $discount_cost, $netprice);
 ?>