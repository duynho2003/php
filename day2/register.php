<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form-group {
            display: inline-block;
            padding: 5px;
        }

        .error {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <h1>Register</h1>
    <form action="processRegister.php" method="post">
        <div class="row">
            <div class="form-group <?php echo isset($_GET['error']) && $_GET['error'] == 'username' ? 'error' : '' ?>">
                <label for="username">Username:</label>
                <input name='username' id="username" />
            </div>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 'username') {
            ?>
                <span>Vui lòng nhập tài khoản</span>
            <?php } ?>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password">Password:</label>
                <input name='password' type='password' id="password" />
            </div>
        </div>

        <div><input type='submit' value="Register" /></div>
    </form>
</body>

</html>