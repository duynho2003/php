<?php
const SERVER = 'localhost';
const DB_USER  = 'root';
const DB_PASS  = '';
const DB_NAME  = 'PhpDB';
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
    $products = [];
    $link = connectDb();
    $sql = "SELECT * FROM tbProducts";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        die("Access db error");
    }
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $products[] = $row;
      }
    }
    return $products;
    closeDB($link);
}

function addNewPD($name, $price)
{
    $link = connectDB();
    $sql = "INSERT INTO tbProducts(name, price) VALUES (?, ?)";
    if ($stm = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stm, 'sd', $name, $price);
        mysqli_stmt_execute($stm);
        mysqli_stmt_close($stm);
    }
    closeDB($link);
}

function delete($code)
{
    $result = 0;
    $link = connectDB();
    $sql = "DELETE FROM tbProducts WHERE code=?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $code);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
    closeDB($link);
    return $result;
}

function findByPrice($min,$max)
{
    $products = [];
    $link = connectDb();
    $query = "SELECT * FROM tbProducts WHERE price BETWEEN $min AND $max";
    $result= mysqli_query($link,$query);
    if(!$result){
        die('Access to DB error');
    }
    if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_array($result)){
            $products[] = $row;
        }
    }
    closeDb($link);
    return $products;
}

function updatePd($price,$code){
    $result = false;
    $link = connectDb();
    $query ="UPDATE tbProducts set price=? WHERE code=?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "di", $price, $code);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
closeDb($link);
return $result;
}