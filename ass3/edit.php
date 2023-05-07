<?php
$code = '';
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
include "db.php";
function getProductbyID($code)
{
    $link = connectDB();
    $sql = "SELECT * FROM tbProducts WHERE code = '$code'";
    $products = null;
    $result = mysqli_query($link, $sql);
    if (!$result) {
        die("Khong tim thay ID nay");
    }
    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_array($result);
    }
    closeDB($link);
    return $products;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px;
        }
        button {
            margin-left: 45%;
        }
    </style>
    <title>Edit Product</title>
</head>

<body>
    <h1>
        <center>Edit Product</center>
    </h1>
    <?php
    $products = getProductbyID($code);
    ?>
    <form action="processEdit.php" method="POST">
        <div class="form-group">
            <!-- <label for="">code</label> -->
            <input type="hidden" class="form-control" id="" name="code" value="<?php echo $products["code"] ?>" required>
        </div>
        <div class="form-group">
            <!-- <label for="">Fullname</label> -->
            <input type="hidden" class="form-control" id="" name="name" value="<?php echo $products["name"] ?>" required>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" id="" name="price" min="0" value="<?php echo $products["price"] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>