<?php
$name = $_POST['name'];
$price = $_POST['price'];
$image = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    move_uploaded_file($_FILES['image']['tmp_name'],
            './images/' . $_FILES['image']['name']);
    $image = $_FILES['image']['name'];
}

$link = mysqli_connect('localhost', 'root', '','demo_login', 3306);
if (!$link) {
    die('Connect DB server error.');
}
$query = "INSERT INTO products (name, price, image) VALUES (?, ?, ?)";

if ($stm = mysqli_prepare($link, $query)) {
    mysqli_stmt_bind_param($stm, 'sis', $name, $price, $image);
    mysqli_stmt_execute($stm);
    mysqli_stmt_close($stm);
}
mysqli_close($link);

// chuyển về trang index.php
header("Location: index.php");