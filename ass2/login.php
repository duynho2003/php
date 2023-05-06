<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
      if (isset($_GET['error'])) {
         ?>
         <h4 style="color: red;">Invalid username or password</h4>
         <?php
      }
    ?>
    <form action="processLogin.php" method="POST">
        <div>Username: <input name="username"/></div>
        <div>Password: <input name="password" type="password"/></div>
        <div><input type="submit" value="Login"/></div>
    </form>
</body>
</html>