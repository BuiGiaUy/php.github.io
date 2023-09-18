<?php
    function sumSquareOfEvenNumbers($arr) {
        $evenNumbers = array_filter($arr, function($item) {
            return $item % 2 === 0;
        });

        $squaredEvenNumbers = array_map(function($item) {
            return $item * $item;
        }, $evenNumbers);

        $sum = array_reduce($squaredEvenNumbers, function($carry, $item) {
            return $carry + $item;
        }, 0);

        return $sum;
    }

    $input = [1, 2, 3, 4, 5, 6];
    $result = sumSquareOfEvenNumbers($input);
    echo "Kết quả: " . $result;