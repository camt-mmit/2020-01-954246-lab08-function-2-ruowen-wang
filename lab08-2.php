<?php
$fp = fopen($_SERVER['argv'][1], 'r');
fscanf($fp, "%d", $n);
$students=[];
for($i = 0; $i < $n; $i++) {
    $student=[];
    fscanf($fp, "%s %s %f %f", $student['name'], $student['section'],$student['score1'],$student['score2']);
    $students[$i]=$student;
}
fclose($fp);
$avg = array_reduce($students, function($carry, $student) {
    return $carry + $student['score1']+$student['score2'];
}, 0) / count($students);
$passes=[];
$passes = array_filter($students, function($student) use ($avg) {
    return $student['score1']+$student['score2'] >= $avg;
});
$sum=array_reduce($passes, function($carry, $student) {
    return $carry + $student['score1']+$student['score2'];
}, 0);
$printStudent = function($student) {
    printf("%10s %3s: %6.2f %6.2f=%6.2f\n", $student['name'], $student['section'],$student['score1'],$student['score2'],$student['score1']+$student['score2']);
};
array_walk($students, $printStudent);
printf("Average total score : %8.2f.\n", $avg);
printf("Summation of total score greater than or equal  %.2f :%6.2f\n",$avg,$sum );
