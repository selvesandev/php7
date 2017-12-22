<?php
/**
 *
 * To assign values in a variable
 * =
 * +=
 * -=
 * /=
 * %=
 * *=
 * .=
 *
 *
 */

$a = 45;

$a *= 2;//$a = $a + 20;

echo $a;

echo "<hr>";

$str = "A quick";
$str .= ' Brown fox';
$str .= ' jumps over the';
$str .= ' lazy dog';
echo $str;


echo '<hr>';


$query = ' SELECT * FROM TABLE ';

if (false) {
    $query .= ' WHERE ID = 1';
}

echo $query;


?>

