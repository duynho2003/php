<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
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
    <form method="get" action="">
        Input Price form <input type="number" name="min">
        to <input type="number" name="max">
        <input type="submit" name="btnSearch" value="Search">
    </form>
    <table id="tbproduct">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Unit Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            if (isset($_GET['btnSearch'])) {
                $min = $_GET['min'];
                $max = $_GET['max'];
                $products = findByPrice($min, $max);
            } else {
                $products = showAll();
            }
            if (count($products) > 0) {
                foreach ($products as $item) {
            ?>
                    <tr>
                        <td><?php echo $item[0]; ?></td>
                        <td><?php echo $item[1]; ?></td>
                        <td><?php echo $item[2]; ?></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="3">No records</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>