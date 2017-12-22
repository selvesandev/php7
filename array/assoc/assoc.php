<?php

$assocArr = [
    'name' => 'ram',
    'email' => 'ram@gmail.com',
    'add' => 'kalanki'
];
echo "<pre>";
print_r($assocArr);
echo "<hr>";


foreach ($assocArr as $key => $value) {
    echo $key . '<br>';
}


echo '<hr>';

echo $assocArr['add'];

echo "<hr>";

$person = [
    [
        'name' => 'james',
        'age' => 20
    ],
    [
        'name' => 'John',
        'age' => 50
    ],
    [
        'name' => 'Snow',
        'age' => 20
    ]
];

print_r($person);





//echo $person[1]['name'];
//echo $person[1]['age'];