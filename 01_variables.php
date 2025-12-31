<?php
/**
 * BT1 — In thông tin cá nhân
 * INPUT: (không có – tự gán trong code)
 * OUTPUT: hiển thị tên, lớp, email theo định dạng xuống dòng
 */

$name = "Phan Đình Thi";
$class = "DCCNTT14.1";
$email = "Thi@gmail.com";
?>

<h2>Thông tin cá nhân</h2>
<ul>
    <li><strong>Họ tên:</strong> <?= $name ?></li>
    <li><strong>Lớp:</strong> <?= $class ?></li>
    <li><strong>Email:</strong> <?= $email ?></li>
</ul>
