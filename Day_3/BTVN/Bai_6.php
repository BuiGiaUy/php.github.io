<?php
function findSecondLargest($arr) {
    rsort($arr);
    $secondLargest = $arr[1];
    return $secondLargest;
}
// Sử dụng
$input = [5, 2, 9, 1, 7, 3];
$result = findSecondLargest($input);
echo $result; // Kết quả: 7