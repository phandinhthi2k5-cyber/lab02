<?php


$r = $_GET["r"] ?? "";  
$pi = 3.14;

$chuVi = "";
$dienTich = "";

if ($r !== "") {
    $chuVi = 2 * $pi * $r;
    $dienTich = $pi * $r * $r;
}
?>

<h2>Tính chu vi & diện tích hình tròn</h2>

<form method="get">
    Nhập bán kính (r):
    <input type="number" step="0.1" name="r" value="<?= $r ?>">
    <button type="submit">Tính</button>
</form>

<?php if ($r !== ""): ?>
    <ul>
        <li>Bán kính: <?= $r ?></li>
        <li>Chu vi: <?= $chuVi ?></li>
        <li>Diện tích: <?= $dienTich ?></li>
    </ul>
<?php endif; ?>
