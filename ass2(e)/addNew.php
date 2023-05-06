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
        <center> ADD NEW</center>
    </h1>
<form action="processAddNew.php" method="POST">
    
    <div class="form-group">
        <label for="">EmpID</label>
        <input type="text" class="form-control" id="empID"  name="empID" value="" required>
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id=""  name="password" value="" required>
    </div>

    <div class="form-group">
        <label for="">Fullname</label>
        <input type="text" class="form-control" id="empID"  name="fullname"  value="" required>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" id="empID"  name="email" value="" required>
    </div>

    <div class="form-group">
        <label for="">Role</label>
        <input type="text" class="form-control" id="empID"  name="role" value="" required>
    </div>

    <div class="form-group">
        <label for="">Salary</label>
        <input type="number" class="form-control" id="empID"  name="salary" min="0" value="" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>