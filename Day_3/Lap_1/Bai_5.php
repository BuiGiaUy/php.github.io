<?php
    function reverseArray($arr) {
        $reverseArr = array_reverse($arr);
        return $reverseArr;
    }
    $array = [1, 2, 3, 4, 5];
    $result = reverseArray($array);
    echo "Mảng sau khi đảo ngược là: ";
    print_r($result);