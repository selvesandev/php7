<?php


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
    ],
    40
];


foreach ($person as $key => $value) {
    if(is_array($value)){
        foreach ($value as $x => $item) {
            echo $item . '<br>';
        }
    }else{
        echo $value.'<br>';
    }

}
