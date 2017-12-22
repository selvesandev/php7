<?php


/**
 * 0 , 0.0, false, '', [],null >> all are empty in php
 */
$a = true;

if (empty($a)) {
    echo 'yes';
} else {
    echo 'no';
}


echo '<hr>';

$b = null;

var_dump(is_null($c));
