<?php
$empID = $password = $fullname = $email = $role = $Salary = '';
if(isset($_POST)){
    $empID = $_POST['empID'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $Salary = $_POST['salary'];
}

include "db.php";
addNew($empID, $password, $fullname, $email, $role, $Salary);
header("Location: admin.php");