<?php
// ket noi voi mySQL 
function connectDB(){
    $link = mysqli_connect('localhost', 'root', '', 'PhpDB', 3306);
    if(!$link){
        die('Ket noi that bai');
    }

    return $link; 
    
}

// dong ket noi 
function closeDB($link){
    mysqli_close($link);
}

//kiem tra xem empID va password co ton tai trong bang Employee hay khong

// Lay thong tin Staff bao gom: id, fullname, email 

function getStaff(){
    $link = connectDB();
    $sql = "Select empID, fullname, email From tbemployee";
    $staff = [];
    $result = mysqli_query($link, $sql);
    if(!$result){
        die("truy van that bai");
    } 

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $staff[] = $row;
        }
    }

    return $staff;
    closeDB($link);
}

// Trang admin lay tat ca thong tin
function getAll(){
    $link = connectDB();
    $sql = "Select * From tbemployee";
    $staff = [];
    $result = mysqli_query($link, $sql);
    if(!$result){
        die("truy van that bai");
    } 

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $staff[] = $row;
        }
    }

    return $staff;
    closeDB($link);
}

//them Staff 
function addNew($empID, $password, $fullname, $email, $role, $salary){
    $link = connectDB();
    $sql = "INSERT INTO tbemployee(empID, password, fullname, email, role, salary) VALUES (?, ?, ?, ?, ?, ?)";
    if($stm = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stm, 'ssssii', $empID, $password, $fullname, $email, $role, $salary);
        mysqli_stmt_execute($stm);
        mysqli_stmt_close($stm);
    }

    closeDB($link);
}