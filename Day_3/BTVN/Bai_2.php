<?php
function countWords($str) {
    return str_word_count($str);
}
// Sử dụng
$input = "This is a sample string";
$result = countWords($input);
echo $result; // Kết quả: 5