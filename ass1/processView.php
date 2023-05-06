<?php
$priceFrom = $priceTo = '';
if (isset($_POST)) {
    if (isset($_POST['priceFrom']) && !empty($_POST['priceFrom']) && $_POST['priceFrom'] > 0 && $_POST['priceFrom'] < 100) {
        // Lấy giá trị của biến $price từ form và thực hiện các thao tác tiếp theo
        $priceFrom = $_POST['priceFrom'];
    } else {
        // Thông báo lỗi nếu giá trị của $price không hợp lệ
        echo "Giá tiền không hợp lệ!";
    }

    if (isset($_POST['priceTo']) && !empty($_POST['priceTo']) && $_POST['priceTo'] > 0 && $_POST['priceTo'] < 100) {
        // Lấy giá trị của biến $price từ form và thực hiện các thao tác tiếp theo
        $priceTo = $_POST['priceTo'];
    } else {
        // Thông báo lỗi nếu giá trị của $price không hợp lệ
        echo "Giá tiền không hợp lệ!";
    }
  
}

