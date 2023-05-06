<?php
// đọc dữ liệu truyền từ form qua
$u = $_POST['username'];
$p = $_POST['password'];

if ($u == null) {
    header('Location: register.php?error=username');
    exit(0); // thoát nếu không sẽ chạy tiếp các lệnh dưới
}

// service name - username - password - database name - port
$con = mysqli_connect('localhost', 'root', '','demo_login', 3306);
if (!$con) {
    die('Connect to DB server error');
    // die = echo + exit
}
$query = "INSERT INTO login (username, password, role) VALUES ('$u', '$p', 2)";
$result = mysqli_query($con, $query);
if (!$result) {
    die('Access DB error');
}

header('Location: register.php'); // Chuyển trang