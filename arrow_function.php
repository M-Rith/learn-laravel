<?php

$number = [1, 2, 3, 4, 5, 6, 7];

$square = array_map(fn($n) => $n * $n, $number);

var_dump($number, $square);

?>
