<?php
    function sumArray($arr) {
        $sum = 0;
        foreach ($arr as $num) {
             $sum += $num;
        }
        return $sum;
    }
    $input = [1, 2, 3, 4, 5];
    $result = sumArray($input);
    echo $result; // Kết quả: 15