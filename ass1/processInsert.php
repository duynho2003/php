<?php
$name = $price = $author = '';

if (isset($_POST)) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error = $_POST['name'];
        header("Location: insertBook.php?name=$error");
        die();
    }

    if (isset($_POST['price']) && !empty($_POST['price']) && $_POST['price'] > 0 && $_POST['price'] < 100) {
        // Lấy giá trị của biến $price từ form và thực hiện các thao tác tiếp theo
        $price = $_POST['price'];
    } else {
        $error = $_POST['price'];
        header("Location: insertBook.php?price=$error");
        die();
    }
    if (isset($_POST['author']) && !empty($_POST['author'])) {
        $author = $_POST['author'];
    } else {
        $error = $_POST['author'];
        header("Location: insertBook.php?author=$error");
        die();
    }
}

include "db.php";
insert($name, $price, $author);
header("Location: viewBook.php");