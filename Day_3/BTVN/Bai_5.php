<?php
function reverseWordsInString($str) {
    $words = explode(' ', $str);

    $reversedWords = array_reverse($words);

    $reversedString = implode(' ', $reversedWords);

    return $reversedString;
}
// Sử dụng
$input = "Hello World";
$result = reverseWordsInString($input);
echo $result; // Kết quả: "olleH dlroW"