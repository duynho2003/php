<?php
// khởi động session
session_start();

if (isset($_SESSION['subject'])) {
    $sub = $_SESSION['subject'];
    echo "subject: $sub";
}

echo "<h4><a href='index.php'>Go Back</a></h4>";