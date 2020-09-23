<?php
//sorry professor,I think this homework is so hard, so I haven't finish all of them,I will finish later and submit.
function name_sort($x, $y)
{ 
    return strcasecmp($x['name'],$y['name']);
}
function section_sort($z, $w)
{
    return ($z["section"]>$w["section"]);
}
function score1_sort($a, $b)
{
    return ($a["score1"]>$b["score1"]);
}
function score2_sort($c, $d)
{
    return ($c["score2"]>$d["score2"]);
}
function score3_sort($e, $f)
{
    return ($e["score3"]>$f["score3"]);
}
function total_sort($g, $h)
{
    return ($g["total"]>$h["total"]);
}
$fp = fopen($_SERVER['argv'][1], 'r');
fscanf($fp, "%d", $n);
$students=[];
for($i = 0; $i < $n; $i++) {
    $student=[]; 
    fscanf($fp, "%s %f %f %f %f %f", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['total']);
  $student['total']=$student['score1']+$student['score2']+$student['score3'];  
     $students[$i]=$student;
}
fclose($fp);
$avg = array_reduce($students, function($carry, $student) {
    return $carry + $student['score1']+$student['score2']+$student['score3'];
}, 0) / count($students);

switch($_SERVER['argv'][2]){
    case"name": 
        uasort($students, 'section_sort');
        uasort($students, 'name_sort');
        $printStudent = function($student) {
            printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['score1']+$student['score2']+$student['score3']);
        };
        array_walk($students, $printStudent);
        printf("Average total score : %8.2f\n", $avg);break;
    case"section":
        uasort($students, 'name_sort');
        uasort($students, 'section_sort');
        $printStudent = function($student) {
            printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['score1']+$student['score2']+$student['score3']);
        };
        array_walk($students, $printStudent);
        printf("Average total score : %8.2f\n", $avg);break;
        
    case"1":
    uasort($students, 'score1_sort');
    $printStudent = function($student) {
        printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['score1']+$student['score2']+$student['score3']);
    };
    array_walk($students, $printStudent);
    printf("Average total score : %8.2f\n", $avg);break;
    case"2":
        uasort($students, 'score2_sort');
        $printStudent = function($student) {
            printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['score1']+$student['score2']+$student['score3']);
        };
        array_walk($students, $printStudent);
        printf("Average total score : %8.2f\n", $avg);break;   
     case"3":
            uasort($students, 'score3_sort');
            $printStudent = function($student) {
                printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['score1']+$student['score2']+$student['score3']);
            };
            array_walk($students, $printStudent);
            printf("Average total score : %8.2f\n", $avg);break; 
            case"total":
                uasort($students, 'name_sort');
                uasort($students, 'section_sort');
                uasort($students, 'total_sort');
                $printStudent = function($student) {
                    printf("%10s %03d:%6.2f %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score3'],$student['total']);
                };
                array_walk($students, $printStudent);
                printf("Average total score : %8.2f\n", $avg);break; 
         
}




?>