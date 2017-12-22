<?php


for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "FIVE <br>";
        continue;
    }
    echo " {$i} <br>";
}

echo "<hr>";

$x = 1;
while ($x <= 10) {
    if ($x == 5) {
        echo "FIVE <br>";
        $x++;
        continue;
    }
    echo " {$x} <br>";
    $x++;
}