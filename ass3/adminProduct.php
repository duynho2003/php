<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
</head>
<style>
    #tbproduct th {
        border: 1px solid #777;
        padding: 0.5rem;
        text-align: center;
        background-color: darkblue;
        color: white;
        border: 1px solid #ddd;
        padding: 8px;
    }

    table {
        border-collapse: collapse;
    }

    tbody tr:nth-child(odd) {
        background: #eee;
    }

    caption {
        font-size: 0.8rem;
    }
</style>

<body>
    <h1>Products List</h1>
    <hr>
    <a href="addNewPd.php">Add New Product</a>
    <table id="tbproduct">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product name</th>
                <th>Unit price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $products = showAll();
            if (count($products) > 0) {
                foreach ($products as $item) {
            ?>
                    <tr>
                        <td><?php echo $item[0]; ?></td>
                        <td><?php echo $item[1]; ?></td>
                        <td><?php echo $item[2]; ?></td>
                        <td>
                            <a href="editProduct.php?code=<?php echo $item[0] ?>">Edit</a>
                            <a href="delete.php?code=<?php echo $item[0] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="3">No Records</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
</body>

</html>