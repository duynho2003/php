<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = 0;
$result = login($username, $password);
if ($result == 0) {
    header('Location: login.php?error=1');
} elseif ($result == 1) {
    header('Location: staff.php');
} elseif ($result == 2) {
    header('Location: admin.php');
}
