<?php
function removeDuplicates($arr) {
    return array_values(array_unique($arr));
}
// Sử dụng
$input = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($input);
print_r($result); // Kết quả: [1, 2, 3, 4, 5]