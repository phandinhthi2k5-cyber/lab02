<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["op"])) {

    $a = $_GET["a"];
    $b = $_GET["b"];
    $op = $_GET["op"];

    echo "<h2>Kết quả phép tính</h2>";

    switch ($op) {
        case "+":
            $result = $a + $b;
            echo "<p>$a + $b = <b>$result</b></p>";
            break;
// dấu cộng URL ==> " %2B "
        case "-":
            $result = $a - $b;
            echo "<p>$a - $b = <b>$result</b></p>";
            break;

        case "*":
            $result = $a * $b;
            echo "<p>$a × $b = <b>$result</b></p>";
            break;

        case "/":
            if ($b == 0) {
                echo "<p><b>Lỗi:</b> Không thể chia cho 0</p>";
            } else {
                $result = $a / $b;
                echo "<p>$a ÷ $b = <b>$result</b></p>";
            }
            break;

        default:
            echo "<p><b>Lỗi:</b> Phép toán không hợp lệ</p>";
    }

} else {
    echo "<h2>Máy tính GET</h2>";
    echo "<p>Vui lòng truyền tham số qua URL.</p>";
     echo "<p><b>Ví dụ:</b></p>";
    echo "<ul>";
    echo "<li>?a=nhập a&b=nhập b&op=+</li>";
    echo "</ul>";
}
?>