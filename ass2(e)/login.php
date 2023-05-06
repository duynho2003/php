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
    <title>Login</title>

    <style>
        h1{
            text-align: center;
        }

        form{
            width: 50%;
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px;
        }

        button{
            margin-left: 45%;
        }
    </style>
</head>

<body>
    <h1>LOGIN</h1>
    <?php
      if (isset($_GET['error'])) {
         ?>
         <h4 style="color: red;">Invalid username or password!</h4>
         <?php
      }
    ?>
    <form action="processLogin.php" method="POST">
        <div class="form-group">
            <label for="">EmpID</label>
            <input type="text" class="form-control" id="empID" placeholder="Enter empID" name="empID">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id="" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>