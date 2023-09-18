<?php
function findPairsWithSum($arr, $sum) {
    $pairs = [];
    $length = count($arr);

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$i] + $arr[$j] === $sum) {
                $pairs[] = [$arr[$i], $arr[$j]];
                $pairs[] = [$arr[$j], $arr[$i]];
            }
        }
    }

    return $pairs;
}
// Sử dụng
$input = [2, 4, 3, 5, 6, 1, 7];
$targetSum = 7;
$result = findPairsWithSum($input, $targetSum);
print_r($result);