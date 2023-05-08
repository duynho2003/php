<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Event</title>
</head>
<style>
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }


    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
</style>

<body>
<h1 style="color:blue;">Events in Ho Chi Minh City</h1>
    <a href="create.php">Create New Event</a>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Date and Time</th>
                <th>Location</th>
                <th>Post code</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $event = showAll();
            if (count($event) > 0) {
                foreach ($event as $item) {
            ?>
                    <tr>
                        <td><?php echo $item[0]; ?></td>
                        <td><?php echo $item[1]; ?></td>
                        <td><?php echo $item[2]; ?></td>
                        <td><?php echo $item[3]; ?></td>
                        <td><?php echo $item[4]; ?></td>
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