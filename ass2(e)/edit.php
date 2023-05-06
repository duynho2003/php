<?php
    $empID = '';
if(isset($_GET['empID'])){
    $empID = $_GET['empID'];
}
include "db.php";
function getStaffbyID($empID){
    $link = connectDB();
    $sql = "Select * From tbemployee Where empID = '$empID'";
    $staff = null;
    $result = mysqli_query($link, $sql);
    if(!$result){
        die("Khong tim thay ID nay");
    }

    if(mysqli_num_rows($result) > 0){
        $staff = mysqli_fetch_array($result);
    }

    closeDB($link);
    return $staff;
}
?>
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
            border: 1px solid black;
            padding: 10px;
        }

        button{
            margin-left: 45%;
        }
    </style>
    <title>Edit</title>
</head>
<body>
    <h1>
        <center>EDIT</center>
    </h1>
    
    <?php 
        $staff = getStaffbyID($empID);
    ?>
<form action="processEdit.php" method="POST">
    
        <div class="form-group">
            <label for="">EmpID</label>
            <input type="text" class="form-control" id="empID"  name="empID" value="<?php echo $staff["empID"] ?>" required>
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id=""  name="password" value="<?php echo $staff["password"] ?>" required>
        </div>

        <div class="form-group">
            <label for="">Fullname</label>
            <input type="text" class="form-control" id="empID"  name="fullname"  value="<?php echo $staff["fullname"] ?>" required>
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="empID"  name="email" value=" <?php echo $staff["email"] ?>" required>
        </div>

        <div class="form-group">
            <label for="">Role</label>
            <input type="text" class="form-control" id="empID"  name="role" value="<?php echo $staff["role"] ?>" required>
        </div>

        <div class="form-group">
            <label for="">Salary</label>
            <input type="number" class="form-control" id="empID"  name="salary" min="0" value="<?php echo $staff["Salary"] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>