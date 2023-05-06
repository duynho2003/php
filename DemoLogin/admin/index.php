<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
    include "../lib.php";
    session_start();
    if (!isset($_SESSION['username'])) {
        if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
            $u = $_COOKIE['username'];
            $p = $_COOKIE['password'];
            if (checkLogin($u, $p)){
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
        }
    }
    ?>
    <h1>Admin</h1>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
</body>
</html>