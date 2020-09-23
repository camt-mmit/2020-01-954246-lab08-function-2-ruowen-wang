<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$data=$argv[1];
if($argc!=3) {
echo"        | ";
for($i=2;$i<=$data;$i++){ 
printf("%4d ",$i);
}
echo"\n";
echo"-------------------------------------------\n";
for($j=1;$j<=12;$j++) {   
printf("%4.d ",$j);
echo"   | ";
for($i=2;$i<=$data;$i++) {
printf("%4d ",$n=$j*$i);
}
echo"\n";
} 
}
else{$fin = fopen('ass-02-output.txt', 'w');
fscanf(STDIN,"%d",$data);
fprintf($fin,"        | ");
for($i=2;$i<=$data;$i++){ 
fprintf($fin,"%4d ",$i);
}
fprintf($fin,"\n");
fprintf($fin,"-------------------------------------------\n");
for($j=1;$j<=12;$j++) {  
fprintf($fin,"%4.d ",$j);
fprintf($fin,"   | ");
for($i=2;$i<=$data;$i++) {
fprintf($fin,"%4d ",$n=$j*$i);
}
fprintf($fin,"\n");
}    
}

  

 