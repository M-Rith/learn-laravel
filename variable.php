<?php

// GLOBAL variable
$globalName = "Rith";

function testGlobal()
{
    global $globalName; // access global variable

    echo "Global Variable: $globalName <br>";
}

testGlobal();

// LOCAL variable
function testLocal()
{
    $localAge = 20; // only exists inside this function

    echo "Local Variable: $localAge <br>";
}

testLocal();

// STATIC variable
function counter()
{
    static $count = 0; // keeps value after function ends

    $count++;

    echo "Static Variable: $count <br>";
}

counter();
counter();
counter();

// SUPERGLOBAL variable
echo "Server Name: " . $_SERVER["SERVER_NAME"];

?>
