<?php
function multiplyByTwo($arr) {
    $result = array_map(function ($item){ return $item * 2;}, $arr);
    return $result;
}
// Sử dụng
$input = [1, 2, 3, 4, 5];
$result = multiplyByTwo($input);
print_r($result);