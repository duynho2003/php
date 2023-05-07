<?php
$username = $password = '';
// Xử lý đăng nhập
if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

include "db.php";
function checkAccount($username, $password)
{
    // Lấy thông tin đăng nhập từ form
    // Truy vấn CSDL để kiểm tra thông tin đăng nhập
    $sql = "SELECT role FROM tbUsers WHERE Username='$username' AND password='$password'";
    $link = connectDB();
    $result = mysqli_query($link, $sql);
    // Kiểm tra số lượng kết quả trả về từ CSDL
    if (mysqli_num_rows($result) == 1) {
        // Lấy thông tin nhân viên từ CSDL
        $row = mysqli_fetch_assoc($result);
        $role = $row["role"];
        // Chuyển hướng tới trang staff.php hoặc admin.php tùy vào vai trò của nhân viên
        if ($role == 1) {
            header("Location: viewProduct.php");
            exit();
        } elseif ($role == 2) {
            header("Location: adminProduct.php");
            exit();
        }
    } else {
        // Hiển thị thông báo lỗi nếu không có thông tin đăng nhập phù hợp
        header("Location: login.php?error=1");
    }
    // Đóng kết nối CSDL
mysqli_close($link);
}
checkAccount($username, $password);