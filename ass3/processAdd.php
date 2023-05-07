<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

addNewPD($name, $price);
header('Location: adminProduct.php');