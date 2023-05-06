<?php
// Kết nối CSDL
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

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin đăng nhập từ form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Truy vấn CSDL để kiểm tra thông tin đăng nhập
    $sql = "SELECT role FROM tbEmployee WHERE empID='$username' AND password='$password'";
    $link = connectDB();
    $result = mysqli_query($link, $sql);
    // Kiểm tra số lượng kết quả trả về từ CSDL
    if (mysqli_num_rows($result) == 1) {
        // Lấy thông tin nhân viên từ CSDL
        $row = mysqli_fetch_assoc($result);
        $role = $row["role"];
        // Chuyển hướng tới trang staff.php hoặc admin.php tùy vào vai trò của nhân viên
        if ($role == 1) {
            header("Location: staff.php");
            exit();
        } elseif ($role == 2) {
            header("Location: admin.php");
            exit();
        }
    } else {
        // Hiển thị thông báo lỗi nếu không có thông tin đăng nhập phù hợp
        header("Location: login1.php?error=1");
    }
}

// Đóng kết nối CSDL
mysqli_close($link);