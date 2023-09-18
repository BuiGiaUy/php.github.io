<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kiểm tra Tuổi</title>
</head>
<body>
<h1>Độ tuổi đăng ký</h1>

<?php
    $age = 20;

    if ($age >= 18) {
        echo "<p>Bạn đủ tuổi để đăng ký.</p>";
    } else {
        echo "<p>Bạn chưa đủ tuổi để đăng ký.</p>";
    }
?>
</body>
</html>