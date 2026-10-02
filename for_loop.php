<?php

echo "Rockets launching \n";

for ($i = 10; $i >= 0; $i--) {
    echo "Launching rocket " . ($i + 1) . "\n";

    if ($i === 0) {
        echo "Rockets launched!\n";
    }
}

?>
