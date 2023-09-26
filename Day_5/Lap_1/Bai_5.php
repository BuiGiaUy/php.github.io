<?php
$givenDate = "2023-09-25"; // Ngày cho trước (ví dụ: 25/09/2023)

// Chuyển đổi ngày thành thứ trong tuần
$dayOfWeek = date('l', strtotime($givenDate));

// Mảng chứa các tên thứ trong tuần tiếng Việt
$daysOfWeekVietnamese = array(
    'Monday' => 'Thứ 2',
    'Tuesday' => 'Thứ 3',
    'Wednesday' => 'Thứ 4',
    'Thursday' => 'Thứ 5',
    'Friday' => 'Thứ 6',
    'Saturday' => 'Thứ 7',
    'Sunday' => 'Chủ nhật'
);

// Hiển thị thứ trong tuần
echo "Ngày $givenDate là: " . $daysOfWeekVietnamese[$dayOfWeek];