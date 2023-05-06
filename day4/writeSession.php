<?php
// khởi động session
session_start();

$_SESSION['subject'] = 'PDLF';

// chuyển về trang index
header("Location: index.php");