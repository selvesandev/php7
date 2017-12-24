<?php


$info = [
    ['ram', 'ram@gmail.com', 'kalanki',22],
    ['shyam', 'shyam@gmail.com', 'putalisadak'],
    ['hari', 'hari@gmail.com', 'thapathali']
];


for ($i = 0; $i < count($info); $i++) {
    for ($j = 0; $j < count($info[$i]); $j++) {
        echo $info[$i][$j].'<br>';
    }
}