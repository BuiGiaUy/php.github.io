<!DOCTYPE html>
<html>
<head>
    <title>PHP If-ElseIf Exercise</title>
    <meta charset="UTF-8">

</head>
<body>
    <h1>Tính điểm</h1>

    <?php
        $score = 85;
        $grade = '';
        if ($score > 90) {
        $grade = 'A';
        } elseif ($score >= 80) {
        $grade = 'B';
        } elseif ($score >= 70) {
        $grade = 'C';
        } elseif ($score >= 60) {
        $grade = 'D';
        } else {
        $grade = 'F';
        }
    ?>

    <p>Điểm của bạn là: <?php echo $score; ?> và đạt mức <?php echo $grade; ?>.</p>
</body>
</html>