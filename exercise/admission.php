<?php

/**
 *
 * >=16 <=30 (admission)
 * <16 (kid)
 * >30 (age exceeded)
 *
 */

$age = 13;

if ($age >= 16 && $age <= 30) {
    echo 'Admission granted';
} else if ($age < 16) {
    echo 'Kid';
} else {
    echo 'No admission';
}

echo '<hr>';

$num1 = 110;
$num2 = 90;
$num3 = 100;

if ($num1 > $num2) {
    if ($num1 > $num3) {
        echo 'Num1 is greater ' . $num1;
    } else {
        echo 'Num3 is greater ' . $num3;
    }
} else {
    if ($num2 > $num3) {
        echo 'Num 2 is greater ' . $num2;
    } else {
        echo 'Num 3 is greater ' . $num3;
    }
}

echo '<hr>';

$a = 10;
$b = 20;
$operator = "+";
$result = '';
switch ($operator) {
    case '+':
        $result = 'the sum is ' . ($a + $b);
        break;
    case '-':
        $result = 'the difference is ' . abs($a - $b);
        break;
    default:
        $result = 'invalid operator';
}
echo $result;