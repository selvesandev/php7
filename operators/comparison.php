<?php

/**
 * To compare two values and generate a boolean result
 *
 * ==
 * >
 * <
 * >=
 * <=
 * <>,!=
 * === (identical)
 *
 */

$a = 20;
$b = '20';

var_dump($a == $b);

if ($a === $b) {
    echo 'YES';
} else {
    echo 'NO';
}