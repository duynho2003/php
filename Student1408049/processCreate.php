<?php
$description = $dateTime = $location = $postcode = '';
if(isset($_POST)){
    $description = $_POST['description'];
    $dateTime = $_POST['dateTime'];
    $location = $_POST['location'];
    $postcode = $_POST['postcode'];
}

include "db.php";
addEvent($description, $dateTime, $location, $postcode);
header("Location: index.php");