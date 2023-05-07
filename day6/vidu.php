<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ cơ sở dữ liệu
$sql = "SELECT * FROM customers WHERE name LIKE '%".$_GET["name"]."%'";

$result = $conn->query($sql);

// Tạo một mảng để chứa dữ liệu
$data = array();

if ($result->num_rows > 0) {
    // Đưa dữ liệu vào mảng
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Trả về dữ liệu dưới dạng JSON
echo json_encode($data);

// Đóng kết nối
$conn->close();
?>
