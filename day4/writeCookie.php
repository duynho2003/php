<?php
setcookie('name', 'quang', time() + 60*60*24);
//quay lại trang index.php
header('Location:index.php');
