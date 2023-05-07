<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Products</title>
</head>

<body>
    <h1>Add new Products</h1>
    <form action="processAdd.php" method="POST">
        <div>Name: <input name="name" type="text" required /></div>
        <div>Price: <input name="price" type="number" min="10000" max="200000" required /></div>
        <input type="submit" value="Add">
    </form>
</body>

</html>