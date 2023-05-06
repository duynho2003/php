<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <form action="add.php">
        <input type="submit" value="Add new">
    </form>
    <h1>Admin</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $result = findAll();
            if (count($result) > 0) {
                foreach ($result as $item) {
            ?>
                    <tr>
                        <td><?php echo $item[0]; ?></td>
                        <td><?php echo $item[1]; ?></td>
                        <td><?php echo $item[2]; ?></td>
                        <td><?php echo $item[3]; ?></td>
                        <td>
                            <!-- <a href="proccessDelete.php?empID=<?php echo $item[0]; ?>">Delete</a> -->
                            <form action="edit.php">
                                <input type="hidden" name="empID" value="<?php echo $item[0]; ?>" />
                                <input type="submit" value="Edit">
                            </form>
                            <form action="processDelete.php">
                                <input type="hidden" name="empID" value="<?php echo $item[0]; ?>" />
                                <input type="submit" value="Delete">
                            </form>
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
    </table>
</body>

</html>