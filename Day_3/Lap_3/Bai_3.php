<?php
    function filterEvenNumbers($arr) {
        $evenNumbers = array_filter($arr, function ($item) {
            return $item % 2 ===0;
        });
        return array_values($evenNumbers);
    }
    $input = [1, 2, 3, 4, 5, 6];
    $result = filterEvenNumbers($input);
    print_r($result); // Kết quả: [2, 4, 6]