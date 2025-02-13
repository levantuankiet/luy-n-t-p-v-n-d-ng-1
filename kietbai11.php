<?php
$kwh = 120;

if ($kwh <= 50) {
    $total = $kwh * 1678;
} elseif ($kwh <= 100) {
    $total = 50 * 1678 + ($kwh - 50) * 1734;
} else {
    $total = 50 * 1678 + 50 * 1734 + ($kwh - 100) * 2014;
}

echo "Tổng tiền điện phải trả: " . number_format($total, 0, ',', '.') . " VNĐ";
?>
