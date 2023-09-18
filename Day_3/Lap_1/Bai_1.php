<?php
function sumArray($arr) {
    $sum = 0;

    foreach ($arr as $value) {
        $sum += $value;
    }

    return $sum;
}

$array = [1, 2, 3, 4, 5];
$result = sumArray($array);
echo "Tổng các phần tử trong mảng là: " . $result;