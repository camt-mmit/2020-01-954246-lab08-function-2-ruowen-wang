<?php
function cmp($a, $b)
{
    return strcmp($b["score"], $a["score"]);
}
$fp = fopen($_SERVER['argv'][1], 'r');
fscanf($fp, "%d", $n);
$students=[];
for($i = 0; $i < $n; $i++) {
    $student = [];
    fscanf($fp, "%s %s %f", $student['name'], $student['section'],$student['score']);
    $students[]=$student;
}
fclose($fp);
usort($students, "cmp");

$printStudent = function($student) {
    printf("%10s %03d: %6.2f\n", $student['name'], $student['section'],$student['score']);
};
array_walk($students, $printStudent);
?>