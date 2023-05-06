<?php
// $_GET
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'aptech' && $password == '123') {
    echo 'Login success.';
} else {
    echo 'Login failed';
}