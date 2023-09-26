<?php
    $daysOfWeek = array(
    'Sunday' => 'Chủ Nhật',
    'Monday' => 'Thứ 2',
    'Tuesday' => 'Thứ 3',
    'Wednesday' => 'Thứ 4',
    'Thursday' => 'Thứ 5',
    'Friday' => 'Thứ 6',
    'Saturday' => 'Thứ 7'
    );

    $now = time();

    $dayOfWeek = date('l', $now);
    $dayOfWeekVietnamese = $daysOfWeek[$dayOfWeek];
    $date = date('d/m/Y', $now);
    $time = date('h:i A', $now);

    echo "$dayOfWeekVietnamese, $date, $time";