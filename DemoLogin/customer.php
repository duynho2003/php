<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include "db.php";
            $customers = getCustomers();
            if (count($customers) > 0) {
                foreach ($customers as $item) { 
            ?>
            <tr>
                <td><?php echo $item[0]; ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="4">No Records.</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>