<?php
    $date = time();

    $formattedPublishDate = date('d/m/Y', $date);

    echo "Ngày đăng bài viết: " . $formattedPublishDate;