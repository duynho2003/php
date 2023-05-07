<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <?php
        $code = $_GET['code'];
    ?>
    <h1>Edit Product</h1>
    <form action="processEdit.php" method="POST">
        <div><input type="hidden" name="code" value="<?php echo $code ?>"></div>
        <div>Unit price: <input type="text" name="price"></div>
        <div><input type="submit" value="Save"></div>
    </form>
</body>
</html>