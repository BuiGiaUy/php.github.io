<?php
    function multiplyEvenNumbers($arr) {
        $result = array_filter($arr, function($item) {
            return $item % 2 === 0;
        });

        $result = array_map(function($item) {
            return $item * 2;
        }, $result);

        return array_values($result);
    }
    $input = [1, 2, 3, 4, 5, 6];
    $result = multiplyEvenNumbers($input);
    print_r($result);