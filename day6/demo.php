<?php
include 'my_trait.php';
include 'student.php';

// lệnh use tương đương lệnh import của java
use vn\aptech\Student;

$stu = new Student('stu001'); // tạo đối tượng
$stu->name = 'quanghd';

echo "id = $stu->id, name = $stu->name<br/>";
//echo "Result: " . $stu->add(3, 4) . "<br/>";