<?php


/**
 *
 *
 *
 * AND (&&) when used all among the given condition must be true
 *
 * OR (||) one among the giver condition should return true
 *
 * And, Or both are used to work with multiple condition
 *
 *
 * NOT (!) flips true to false and false to true
 */


$a = 40;
$b = 20;
$c = 60;

if (($a > $b) || ($a > $c)) {
    echo 'YES';
} else {
    echo 'NO';
}

echo "<hr>";

if (!($a < $b)) {
    echo 'YES';
} else {
    echo "NO";
}

