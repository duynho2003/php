<?php

$x = 5;
function test() {
    $x = 10;
    echo 'xs = ' . $x . '</br>';
}

test();
echo 'x = ' . $x . '<br/>';

if ($x >= 10){
    $x += 10;
}

echo 'x = ' . $x . '<br/>';

//int $a => type hint của biến a
function add(int $a, int $b) {
    return $a + $b;
}

echo 'The result: ' . add(3, 4) . '<br/>';

echo 'The result: ' . add('3', 4) . '<br/>';

//echo 'The result: ' . add('a', 4) . '<br/>';


$arr = [1, 4, 7, 2, 5, 9];
foreach($arr as $key=>$item) {
    echo 'item = ' . $item . '<br/>';
}

// thêm 1 phần tử mới vào mảng
$arr[3] = 15;

echo '<br/>';
sort($arr);
echo 'sorted array<br/>';
foreach($arr as $key=>$item) {
    echo 'item = ' . $item . '<br/>';
}

echo '<br/>';

$arr2 = ['quang'=> 8, 'hung'=> 7];
foreach ($arr2 as $key=>$item) {
    echo 'key = ' . $key . '<br/>';
    echo 'item = ' . $item . '<br/>';
}

$arr2['sinh'] = 9;

echo '<br/>';

echo 'sorted array<br/>';
ksort($arr2);
foreach ($arr2 as $key=>$item) {
    echo 'key = ' . $key . '<br/>';
    echo 'item = ' . $item . '<br/>';
}