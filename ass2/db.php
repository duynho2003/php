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

function login($username, $password)
{
    $result = 0;
    $link = connectDb();
    $sql = "SELECT role FROM tbEmployee WHERE empID='$username' AND password='$password'";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        die("Access db error");
    }
    if (mysqli_num_rows($result) > 0) {
      if ($row = mysqli_fetch_array($result)) {
        $result = $row[0];
      }
    }
    return $result;
}

function findAll()
{
    $result = [];
    $link = connectDb();
    $sql = "SELECT empID, fullname, email, role, salary FROM tbEmployee";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        die("Access db error");
    }
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
      }
    }
    return $rows;
}

function create($empId, $password, $fullname, $email, $role, $salary)
{
    $result = 0;
    $link = connectDB();
    $sql = "INSERT INTO tbEmployee VALUES (?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, 'ssssii', $empId, $password, $fullname, $email, $role, $salary);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
    closeDB($link);
    return $result;
}

function update($empId, $password, $fullname, $email, $role, $salary)
{
    $result = 0;
    $link = connectDB();
    $sql = "UPDATE tbEmployee SET password=?, fullname=?, email=?, role=?, salary=? WHERE empID=?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, 'sssiis', $password, $fullname, $email, $role, $salary, $empId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
    closeDB($link);
    return $result;
}

function delete($empId)
{
    $result = 0;
    $link = connectDB();
    $sql = "DELETE FROM tbEmployee WHERE empID=?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $empId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $result = true;
    }
    closeDB($link);
    return $result;
}