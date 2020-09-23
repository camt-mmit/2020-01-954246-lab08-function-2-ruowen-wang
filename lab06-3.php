<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
if($_SERVER['argc'] == 3) {
$fi=file_get_contents($_SERVER['argv'][1]);{
    if(is_file($_SERVER['argv'][1]))
        {
            $fo=fopen($_SERVER['argv'][2], 'w');
            fputs($fo,$fi);
            fclose($fo);
        }
        else
        {
        echo ("Cannot open file not_existed_file.txt!!! \n");
        } 

}}
    
if($_SERVER['argc'] == 2)
{
    $fout=fopen($_SERVER['argv'][1], 'w');
    for($i=0;$i>=0;$i++){
    fscanf(STDIN,"%s",$out);
    if($out=="^z"){
    break;
    }
    else{
        fprintf($fout,"%s\n",$out);
    }
}
}
if($_SERVER['argc'] ==1){
    echo"invalid arguments \n";
    echo"use ass03 [input_file] output_file ";
}