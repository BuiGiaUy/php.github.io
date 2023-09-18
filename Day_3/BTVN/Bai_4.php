<?php
function isAscendingArray($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}
// Sử dụng
$input = [1, 3, 5, 7, 9];
$result = isAscendingArray($input);
var_dump($result); // Kết quả: true