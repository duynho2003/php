<?php
const SERVER = 'localhost';
const DB_USER  = 'root';
const DB_PASS  = '';
const DB_NAME  = 'EventDB';
const DB_PORT  = '3306';

function connectDB()
{
    $link = mysqli_connect(SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    if(!$link) {
        die('Connect DB Error');
    }
    return $link;
}

function closeDB($link) {
    mysqli_close($link);
}

function showAll()
{
    $event = [];
    $link = connectDb();
    $sql = "SELECT * FROM tbEvent";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        die("Access db error");
    }
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $event[] = $row;
      }
    }
    return $event;
    closeDB($link);
}

function addEvent($description, $dateTime, $location, $postcode){
    $link = connectDB();
    $sql = "INSERT INTO tbEvent(description, dateTime, location, postcode) VALUES (?, ?, ?, ?)";
    if($stm = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stm, 'sssi', $description, $dateTime, $location, $postcode);
        mysqli_stmt_execute($stm);
        mysqli_stmt_close($stm);
    }
    closeDB($link);
}