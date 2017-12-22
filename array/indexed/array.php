<?php

$a = ['Ram', 'ram@gmail.com', 'kalanki', 45];
$a[] = '';

echo count($a);


echo "<pre>";
print_r($a);


echo $a[0] . "({$a[1]}) lives in " . $a[2] . ' ages ' . $a[3];
echo '<br>';
echo "ram(ram@gmail.com) lives in kathmandu. ages 22";
echo '<br>';

echo $a[0] . "({$a[1]}) lives in " . $a[2] . ' ages' . $a[3];


echo "<hr>";

echo $a[0] . '<br>';


echo '<hr>';


$i = 0;
while ($i < count($a)) {
    echo $a[$i] . '<br>';
    $i++;
}

echo "<hr>";

foreach ($a as $key => $value) {
    if ($key == 1) {
        continue;
    }
    echo $value . '<br>';
}

