<?php
    function countOccurrences($arr, $value) {
        $count = 0;
        foreach ($arr as $item) {
            if ($item == $value) {
                $count++; 
            }
        }
        return $count;
    }

    $array = [1,2,3,4,2,5,2];
    $valueToFind = 2;
    $result = countOccurrences($array, $valueToFind);
    echo "Số lần xuất hiện của " . $valueToFind . " trong mảng là: " . $result;
