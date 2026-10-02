<?php
function countDown(int $start): Generator
{
    for ($i = $start; $i > 0; $i--) {
        echo "Generating number...\n";
        yield random_int(1, 100);
    }
}

// To use countDown function to get this.
foreach (countDown(5) as $number) {
    echo "Echoing number...\n";
    echo "$number\n";
}
