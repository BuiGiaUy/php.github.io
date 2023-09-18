<?php
function findMostFrequentElement($arr) {
    $counts = array_count_values($arr);
    arsort($counts); // Sắp xếp mảng theo số lần xuất hiện giảm dần

    foreach ($counts as $element => $count) {
        return $element;
    }

    return null;
}
// Sử dụng
$input = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
$result = findMostFrequentElement($input);
echo $result; // Kết quả: 4