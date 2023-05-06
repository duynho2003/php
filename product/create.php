<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Products</title>
</head>
<body>
    <h1>Create New Products</h1>
    <form action="processCreate.php" method="POST" enctype="multipart/form-data">
        <div>Name: <input name="name"/></div>
        <div>Price: <input name="price"/></div>
        <div>Image: <input type="file" name="image" required/></div>
        <div><input type="submit" value="Create"/></div>
    </form>
</body>
</html>