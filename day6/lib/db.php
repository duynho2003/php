<?php
const SERVER='localhost';
const USER='root';
const PASS='';
const DB_NAME='customerdb';
const PORT=3306;

function connect()
{
    $link = mysqli_connect(SERVER, USER, PASS, DB_NAME, PORT);
    if (!$link) {
        die ('Connect to DB Server error.');
    }
    return $link;
}

function close($link)
{
    mysqli_close($link);
}

function findAll() {
    $laptop = [];
    $link = connect();
    $query = "SELECT id, name, price, image FROM laptop";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Access to DB error.');
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $laptop[] = $row;
        }
    }
    close($link); // đóng kết nối.
    return $laptop;
}

function findByPrice($min, $max) {
    $laptop = [];
    $link = connect();
    $query = "SELECT id, name, price, image FROM laptop WHERE price BETWEEN $min AND $max";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Access to DB error.');
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $laptop[] = $row;
        }
    }
    close($link); // đóng kết nối.
    return $laptop;
}

function create($name, $price, $image) {
    $result = false;
    $link = connect();
    $query = "INSERT INTO laptop (name, price, image) VALUES (?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, 'sis', $name, $price, $image);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
    closeDB($link);
    return $result;
}