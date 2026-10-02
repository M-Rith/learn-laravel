<?php

do {
    $diceRoll = rand(1, 6);
    echo "Dice roll: " . $diceRoll . "\n";

    if ($diceRoll === 6) {
        echo "Congratulations!";
    }

    echo "Roll again? (Y/N)";

    $rollAgain = trim(fgets(STDIN));
} while ($rollAgain === "Y");

?>
