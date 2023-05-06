<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
</head>
<body>
    <h1>Staff</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $result = findAll();
            if (count($result ) > 0) {
                foreach($result as $item) {
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
                    <td colspan="3">No Records</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>