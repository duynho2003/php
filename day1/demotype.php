<?php
$a = 10;
echo "a = $a. <br/>";
echo 'a = $a. <br/>';
echo 'type of a = ' . gettype($a) . '<br/>';
$a = 'hello';
echo 'type of a = ' . gettype($a) . '<br/>';

$a = "123";
$b = 10;
$c = $a + $b;
echo 'c = ' . $c . '<br/>';

// khai bao mang
$arr = array();
$brr = [];

$str = "welcome to fpt php class at T22208";
echo 'total chars of str is: ' . strlen($str) . '<br/>';
echo 'Line: ' . __LINE__ . '<br/r';
echo 'total word of str is: ' . str_word_count($str) . '<br/>';
echo 'uc word of str is: ' . ucwords($str) . '<br/>';

define('PI', 3.1415);

const G = 10;

echo 'Directory: ' . __DIR__ . '<br/>';