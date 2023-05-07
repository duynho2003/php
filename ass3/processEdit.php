<?php
include 'db.php';

$code = $_POST['code'];
$price = $_POST['price'];

if ($price < 10000 || $price > 200000) {
    // header('Location: editProduct.php?error=1');
    echo "Error: Price must be between 10000 and 200000";
} else {
    if (updatePd($price, $code)) {
        header('Location: adminProduct.php');
    } else {
        header('Location: editProduct.php?error=1');
    }
}