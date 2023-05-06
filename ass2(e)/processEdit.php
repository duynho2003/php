<?php
$empID = $password = $fullname = $email = $role = $Salary = '';
if(isset($_POST)){
    $empID = $_POST['empID'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $Salary = $_POST['salary'];
}

include "db.php";
function edit($empID, $password, $fullname, $email, $role, $Salary){
    $link = connectDB();
    $sql = "UPDATE tbemployee SET empID = ?,password = ? ,fullname = ? ,email=?,role=?,salary=? WHERE empID = '$empID'";

    if($stm = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stm, 'ssssii', $empID, $password, $fullname, $email, $role, $Salary);
        mysqli_stmt_execute($stm);
        mysqli_stmt_close($stm);
    }
    closeDB($link);
}

edit($empID, $password, $fullname, $email, $role, $Salary);
header("Location: admin.php");