<?php
include 'lib.php';

session_start();

$u = $_POST["username"];
$p = $_POST["password"];

// kiểm tra đăng nhập
if (checkLogin($u, $p)) {
    $_SESSION["username"] = $u;
    //kiểm tra xem có y/c remember không?
    if(isset($_POST['remember'])) {
        setcookie("username", $u, time() + 24*60*60);
        setcookie("password", $p, time() + 24*60*60);
    } else {
        setcookie("username", $u, time() - 1);
        setcookie("password", $p, time() - 1); 
    }
    header("Location: admin/index.php");
} else {
    header("Location: login.php?error=1");
}