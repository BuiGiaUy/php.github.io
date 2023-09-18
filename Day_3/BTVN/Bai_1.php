<?php
function reverseString($str) {
    $reverseStr = strrev($str);
    return $reverseStr;
}
// Sử dụng
$input = "Hello World";
$result = reverseString($input);
echo $result; // Kết quả: "dlroW olleH"