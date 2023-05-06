<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        a {
            color: black;
        }

        .btn-add-new {
            border: none;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>
        <center>ADMIN</center>
    </h1>

    <button class="btn-add-new">
        <a href="addNew.php">Add new</a>
    </button>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "db.php";
            $staff =  getAll();
            if (count($staff) > 0) {
                foreach ($staff as $item) { ?>
                    <tr>
                        <td><?php echo $item[0] ?> </td>
                        <td><?php echo $item[2] ?> </td>
                        <td><?php echo $item[3] ?> </td>
                        <td><?php echo $item[4] ?> </td>
                        <td>
                            <button type="submit" name='edit' method="POST">
                                <a href="edit.php?empID=<?php echo $item[0] ?>">Edit</a>
                            </button>
                            <button name='delete' method="GET">
                                <a href="delete.php?empID=<?php echo $item[0] ?>">Delete</a>
                            </button>
                        </td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>