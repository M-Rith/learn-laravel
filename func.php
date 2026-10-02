<?php

function greet(string $name): string
{
    return "Hello, $name!";
}

echo greet("Rith");

function greetWithTime(string $name, $time = null): string
{
    if ($time) {
        return "Hello, $name! It's $time.";
    }
    return "Hello, $name!";
}

echo greetWithTime("Rith", "10:00 AM");
echo greetWithTime("Rith");

function otherGreet(
    string $name,
    string $greet = "Hello",
    bool $shouldShout = false,
): string {
    $result = "$greet, $name!";

    if ($shouldShout) {
        $result = strtoupper($result);
    }

    return $result;
}

echo otherGreet("Rith");
echo "<br>";

echo otherGreet("Rith", "Hi");
echo "<br>";

echo otherGreet(shouldShout: true, name: "Rith", greet: "");

?>
