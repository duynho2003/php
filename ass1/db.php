<?php
function connectDB()
{
    $link = mysqli_connect('localhost', 'root', '', 'PhpDB', 3306);
    if (!$link) {
        die("Ket noi database that bai");
    }

    return $link;
}


function insert($name, $price, $author)
{
    $query = "Insert into tbbook(name, price, author) Values(?,?,?)";
    $link = connectDB();
    if ($stm = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stm, 'sis', $name, $price, $author);
        mysqli_stmt_execute($stm);
        mysqli_stmt_close($stm);
    }
    mysqli_close($link);
}

function getBooks()
{
    $books = [];
    $link = connectDB();
    $query = "Select * From tbbook";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Access DB Error');
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $books[] = $row;
        }
    }
    mysqli_close($link);
    return $books;
}

function findByPrice($priceFrom, $priceTo)
{
    $books = [];
    $link = connectDB();
    $query = "Select * From tbbook Where price BETWEEN ? AND ?";
    $priceFrom = (double)$priceFrom;
    $priceTo = (double)$priceTo;
    if ($stm = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stm, 'dd', $priceFrom, $priceTo);
        mysqli_stmt_execute($stm);
        $result = mysqli_stmt_get_result($stm);
        mysqli_stmt_close($stm);
    }
    
    if (!$result) {
        die('Access DB Error');
    }
    
    while ($row = mysqli_fetch_array($result)) {
        $books[] = $row;
    }
    
    mysqli_close($link);
    return $books;
}
