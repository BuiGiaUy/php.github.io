<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP If-Else Exercise</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kiểm tra tính chẵn lẻ của 1 số</h1>

    <?php
        $number = rand(10, 100);
        $result = ($number % 2 === 0) ? "chẵn" : "lẻ";
    ?>

    <p>Số: <?php echo $number; ?> là số <?php echo $result; ?>.</p>
</body>
</html>