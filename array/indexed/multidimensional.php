<?php

/**
 * Array inside an array (multidimensional array)
 */

$info = [
    ['ram', 'ram@gmail.com', 'kalanki'],
    ['shyam', 'shyam@gmail.com', 'putalisadak'],
    ['hari', 'hari@gmail.com', 'thapathali']
];

echo $info[0][0] . ' and ' . $info[2][0] . ' are friends and they live in ' . $info[0][2] . ' and ' . $info[2][2];

echo '<hr>';

echo $info[0][0] . '<br>';
echo $info[0][1] . '<br>';
echo $info[0][2] . '<br>';
echo $info[1][0] . '<br>';
echo $info[1][1] . '<br>';
echo $info[1][2] . '<br>';