<?php
$empID = '';
if(isset($_GET['empID'])){
    $empID = $_GET['empID'];
}

include "db.php";
function delete($empID){
    $link = connectDB();
    $sql = "DELETE FROM `tbemployee` WHERE empID = '$empID'";
    mysqli_query($link, $sql);
    closeDB($link);
}

delete($empID);
header("Location: admin.php");