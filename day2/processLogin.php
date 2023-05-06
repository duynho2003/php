<?php
// đọc dữ liệu truyền từ form qua
$u = $_POST['username'];
$p = $_POST['password'];

// service name - username - password - database name - port
$con = mysqli_connect('localhost', 'root', '','demo_login', 3306);
if (!$con) {
    die('Connect to DB server error');
    // die = echo + exit
}

$query = "SELECT * FROM login WHERE username='$u' AND password='$p'";
$result = mysqli_query($con, $query);
if (!$result) {
    die('Access DB error');
}

if (mysqli_num_rows($result) > 0 ) {
    header("Location: index.php");
} else {
    header("Location: login_error.php");
}