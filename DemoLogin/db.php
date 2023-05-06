<?php

function connectDb()
{
    $link = mysqli_connect('localhost', 'root', '', 'customerdb', 3306);
    if (!$link) {
        die('Connect DB error.');
    }
    return $link;
}

function closeDb($link) {
    mysqli_close($link);
}

function getCustomers() {
    $custs = [];
    $link = connectDb();
    $query = "SELECT id, name, email, phone FROM customers";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Access db error.');
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $custs[] = $row; 
        }
    }
    closeDb($link);
    return $custs;
}