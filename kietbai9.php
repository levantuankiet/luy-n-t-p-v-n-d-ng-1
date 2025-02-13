<?php
$income = 15000000;

if ($income <= 10000000) {
    $tax_rate = 0.05;
} elseif ($income <= 20000000) {
    $tax_rate = 0.10;
} else {
    $tax_rate = 0.20;
}

$tax = $income * $tax_rate;
$net_income = $income - $tax;

echo "Thuế phải nộp là: " . number_format($tax, 0, ',', '.') . " VNĐ\n";
echo "Thu nhập ròng sau khi trừ thuế là: " . number_format($net_income, 0, ',', '.') . " VNĐ\n";
?>
