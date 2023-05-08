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
        form{
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid black;
        }

        button{
            margin-left: 45%;
        }
    </style>
    <title>Add new</title>
</head>
<body>
    <h1>
        <center>Create New Event</center>
    </h1>
<form action="processCreate.php" method="POST">
    
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id=""  name="description" value="" required>
    </div>

    <div class="form-group">
        <label for="">Date Time</label>
        <input type="text" class="form-control" id=""  name="dateTime"  value="" required>
    </div>

    <div class="form-group">
        <label for="">Location</label>
        <input type="text" class="form-control" id=""  name="location" value="" required>
    </div>

    <div class="form-group">
        <label for="">Postcode</label>
        <input type="number" class="form-control" id=""  name="postcode" value="" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>