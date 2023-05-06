<?php
include 'db.php';

$empID = $_GET['empID'];

if (delete($empID)) {
    header('Location: admin.php');
} else {
    header('Location: delete.php?error=1');
}