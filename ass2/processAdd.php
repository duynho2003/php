<?php
include 'db.php';

$empID = $_POST['empID'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$role = $_POST['role'];
$salary = $_POST['salary'];

if (create($empID, $password, $fullname, $email, $role, $salary)) {
    header('Location: admin.php');
} else {
    header('Location: create.php?error=1');
}