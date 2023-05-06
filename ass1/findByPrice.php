<?php
    $priceFrom = $priceTo = '';

if (isset($_GET)) {
    if (isset($_GET['priceFrom']) && !empty($_GET['priceFrom']) && $_GET['priceFrom'] > 0 && $_GET['priceFrom'] < 100) {
        // Lấy giá trị của biến $price từ form và thực hiện các thao tác tiếp theo
        $priceFrom = $_GET['priceFrom'];
    } 
    else {
        // Thông báo lỗi nếu giá trị của $price không hợp lệ
        echo "Giá tiền không hợp lệ! From > 0". "<br>";
        die();
    }

    if (isset($_GET['priceTo']) && !empty($_GET['priceTo']) && $_GET['priceTo'] > 0 && $_GET['priceTo'] < 100) {
        // Lấy giá trị của biến $price từ form và thực hiện các thao tác tiếp theo
        $priceTo = $_GET['priceTo'];
    }
     else {
        // Thông báo lỗi nếu giá trị của $price không hợp lệ
        echo "Giá tiền không hợp lệ! To < 100";
        die();

    }
}
// findByPrice($priceFrom, $priceTo);
// header("Location: viewBook.php");