<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra điểm số</title>
</head>
<body>
<h1>Kiểm tra điểm số</h1>

<?php
        $score = 75;
        if ($score > 90) {
            echo "<p>Mức điểm: A</p>";
        } elseif ($score >= 80) {
            echo "<p>Mức điểm: B</p>";
        } elseif ($score >= 70) {
            echo "<p>Mức điểm: C</p>";
        } elseif ($score >= 60) {
            echo "<p>Mức điểm: D</p>";
        } else {
            echo "<p>Mức điểm: F</p>";
        }
?>

</body>
</html>