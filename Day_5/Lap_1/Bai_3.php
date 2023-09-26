<?php
    $monthsOfYear = array(
    'January' => 'Tháng 1',
    'February' => 'Tháng 2',
    'March' => 'Tháng 3',
    'April' => 'Tháng 4',
    'May' => 'Tháng 5',
    'June' => 'Tháng 6',
    'July' => 'Tháng 7',
    'August' => 'Tháng 8',
    'September' => 'Tháng 9',
    'October' => 'Tháng 10',
    'November' => 'Tháng 11',
    'December' => 'Tháng 12'
    );

    $now = time();

    $monthOfYear = date('F', $now);
    $monthOfYearVietnamese = $monthsOfYear[$monthOfYear];
    $date = date('d/m/Y', $now);
    $time = date('h:i A', $now);

    echo "$monthOfYearVietnamese, $date, $time";