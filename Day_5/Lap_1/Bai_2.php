<?php
    $birthday = "1990-05-15";
    $now = time();
    // Viết code

    $difference = $now - strtotime($birthday);

    $age = floor($difference / (365.25 * 24 * 60 * 60));

    echo "Tuổi của bạn là: " . $age;