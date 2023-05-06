<?php
$empID = $password = '';
if (isset($_POST)) {
    $empID = $_POST['empID'];
    $password = $_POST['password'];
}

include "db.php";

function checkAccount($empID, $password)
{
    $sql = "Select * from tbemployee Where empID = ? AND password = ?";
    $result = null;
    $link = connectDB();
    if ($stm = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stm, 'ss', $empID, $password);
        mysqli_stmt_execute($stm);
        $result = mysqli_stmt_get_result($stm);
        mysqli_stmt_close($stm);
    }
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        if ($row['role'] == 1) {
            header("Location: staff.php");
        } else {
            header("Location: admin.php");
        }
    } else {
        echo "Khong tim thay tai khoan cua ban";
    }
    closeDB($link);
}

checkAccount($empID, $password);