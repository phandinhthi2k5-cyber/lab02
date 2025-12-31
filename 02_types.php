<?php
// ===== Input =====
$so_nguyen = 10;               // integer
$so_thuc   = 3.14;             // float
$chuoi     = "Xin chào PHP";   // string
$logic     = true;             // boolean
$mang      = array(1, 2, 3);   // array

// ===== Output =====
echo "<h2>Kiểm tra kiểu dữ liệu trong PHP</h2>";

echo "Biến số nguyên:<br>";
var_dump($so_nguyen);
echo "<br><br>";

echo "Biến số thực:<br>";
var_dump($so_thuc);
echo "<br><br>";

echo "Biến chuỗi:<br>";
var_dump($chuoi);
echo "<br><br>";

echo "Biến logic:<br>";
var_dump($logic);
echo "<br><br>";

echo "Biến mảng:<br>";
var_dump($mang);
?>