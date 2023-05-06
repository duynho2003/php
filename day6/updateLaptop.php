<?php
include './lib/db.php';

// kiểm tra nếu có dữ liệu được submit đi từ form và phương thức là POST
if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    // kiểm tra xem các trường được nhập vào có đầy đủ không
    if (!empty($id) && !empty($name) && !empty($price) && !empty($image)) {
        $link = connect();
        $query = "UPDATE laptop SET name=?, price=?, image=? WHERE id=?";
        if ($stmt = mysqli_prepare($link, $query)) {
            mysqli_stmt_bind_param($stmt, 'sisi', $name, $price, $image, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: laptop.php"); //chuyển hướng về trang danh sách laptop sau khi cập nhật
            exit();
        } else {
            echo "Có lỗi xảy ra khi cập nhật thông tin laptop!";
        }
        close($link);
    } else {
        // thông báo nếu có trường nào bị trống
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
} else {
    // lấy thông tin của laptop cần cập nhật từ database và hiển thị lên form
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $link = connect();
        $query = "SELECT id, name, price, image FROM laptop WHERE id=$id";
        $result = mysqli_query($link, $query);
        if (!$result) {
            die('Access to DB error.');
        }
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
        }
        close($link);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cập Nhật Laptop</title>
</head>

<body>
    <h1>Cập Nhật Laptop</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Tên Laptop:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label for="price">Giá:</label><br>
        <input type="number" id="price" name="price" value="<?php echo $price; ?>"><br>
        <div>Image: <input type="file" name="image" required/></div>
        <input type="submit" name="submit" value="Cập Nhật">
    </form>
</body>

</html>
