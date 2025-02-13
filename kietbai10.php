<?php
$weight = 70;
$height = 1.75;

$bmi = $weight / ($height * $height);

echo "Chỉ số BMI: " . number_format($bmi, 2) . "\n";

if ($bmi < 18.5) {
    echo "Xếp loại: Thiếu cân";
} elseif ($bmi < 24.9) {
    echo "Xếp loại: Bình thường";
} elseif ($bmi < 29.9) {
    echo "Xếp loại: Thừa cân";
}
?>
