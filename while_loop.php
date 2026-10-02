<?php

$attempts = 0;
$max_attempts = 5;
$correct_password = "password";

while ($attempts < $max_attempts) {
    echo "Guess the password:\n";
    $guess = trim(fgets(STDIN));

    if ($guess === $correct_password) {
        echo "Correct! You guessed the right password.\n";
        break;
    }

    $attempts++;

    echo "Incorrect. Try again.\n";
    echo "You have " . ($max_attempts - $attempts) . " attempts left.\n";
}

if ($attempts === $max_attempts) {
    echo "Maximum attempts reached.\n";
}

?>
