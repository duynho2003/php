<?php
include 'db.php';

$code = $_GET['code'];

if (delete($code)) {
    header('Location: adminProduct.php');
} else {
    header('Location: delete.php?error=1');
}