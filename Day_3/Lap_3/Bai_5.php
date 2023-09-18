<?php
function sumOddNumbers($arr) {
    $oddNumbers = array_filter($arr, function($item) {
        return $item % 2 !== 0;
    });

    $sum = array_reduce($oddNumbers, function($carry, $item) {
        return $carry + $item;
    }, 0);

    return $sum;
}

// Sử dụng
$input = [1, 2, 3, 4, 5, 6];
$result = sumOddNumbers($input);
echo "Kết quả: " . $result;





