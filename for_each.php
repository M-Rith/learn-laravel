<?php

$basket = ["Apple" => 5, "Banana" => 3, "Orange" => 2];
$total = 0;
foreach ($basket as $fruit => $quantity) {
    echo $fruit . "\n";
    echo "Quantity: " . $quantity . "\n";
    $total += $quantity;
}

echo "Total Fruits: " . $total . "\n";
?>
