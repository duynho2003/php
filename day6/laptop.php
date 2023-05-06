<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all Laptops</title>
</head>
<body>
    <h1>Display all Laptops</h1>
    <form action="">
        Price min: <input name="min"/>
        max: <input name="max"/>
        <input type="submit" name="btnSearch" value="Search"/>
    </form>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Image</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include './lib/db.php';
            if (isset($_GET['btnSearch'])) {
                $min = $_GET['min'];
                $max = $_GET['max'];
                $laptop = findByPrice($min, $max);
            } else {
                $laptop = findAll(); 
            }
            $laptop = findAll();
            if (count($laptop) > 0) {
                foreach ($laptop as $item) {
            ?>
            <tr>
                <td><?php echo $item[0]; ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td>
                    <?php if($item[4] !=null) { ?>
                        <img src="images/<?php echo $item[4]; ?>" alt="">
                    <?php } ?>
                </td>
                <td>
                    <a href="updateLaptop.php?id<?php echo $item[0]; ?>">Edit</a>
                </td>
            </tr>
            <?php
            }
            } else {
            ?>
            <tr>
                <td colspan="5">No Records</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>