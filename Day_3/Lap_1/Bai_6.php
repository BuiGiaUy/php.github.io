<?php
    function sumDivisibleBy3Or5($arr) {
        $sum = 0;
        foreach ($arr as $number) {
            if ($number % 3 === 0 || $number % 5 === 0) {
                $sum += $number;
            }
        }
        return $sum;
    }

    $array = [1,2,3,4,5,6,7,8,9,10];
    $result = sumDivisibleBy3Or5($array);
    echo "Tổng các số chia hết cho 3 hoặc 5 trong mảng là: " . $result;