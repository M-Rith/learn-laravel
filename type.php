<?php

$isStudent = 1;

var_dump($isStudent, $isStudent === true);

$scores = [85, "90.5", 90.5];

var_dump($scores[0] + $scores[1] + $scores[2]);

$scores_a = [85, (float) "90.5", 90];

$total = $scores_a[0] + $scores_a[1] + $scores_a[2];

echo "Total score is : $total \n";
?>
