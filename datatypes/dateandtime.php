<?php

date_default_timezone_set('Asia/Baghdad');

$now = time();
$myTime = mktime(12, 22, 40, 12, 25, 2012);
$strTime = strtotime('now');

echo $now;
echo '<br>';
echo $myTime;
echo '<br>';
echo $strTime;


echo '<hr>';

//jan 1st of 2014 tuesday

echo date('M dS \of Y l', $myTime);

echo "<hr>";

echo date('Y-m-d H:i:s');

echo date_default_timezone_get();