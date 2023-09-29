<?php
function validateForm($name, $email, $feedbackType, $comments) {
    $errors = [];

    if (empty($name)) {
        $errors[] = "Tên là bắt buộc.";
    }elseif (strlen($name) < 2) {
        $errors[] = "Tên quá ngắn.";
    } elseif (strlen($name) > 50) {
        $errors[] = "Tên quá dài.";
    }

    if (empty($email)) {
        $errors[] = "Vui lòng nhập địa chỉ email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Vui lòng nhập địa chỉ email hợp lệ.";
    }

    $validFeedbackTypes = ["Comments", "Bug Reports", "Questions", "Suggestions"];
    if (empty($feedbackType) || !in_array($feedbackType, $validFeedbackTypes)) {
        $errors[] = "Hãy chọn loại phản hồi.";
    }

    if (empty($comments)) {
        $errors[] = "Hãy mô tả phản hồi của bạn.";
    }elseif (strlen($comments) < 10) {
        $errors[] = "Nội dung phản hồi quá ngắn.";
    } elseif (strlen($comments) > 500) {
        $errors[] = "Nội dung phản hồi quá dài.";
    }

    return $errors;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedbackType = $_POST["feedbackType"];
    $comments = $_POST["Comments"];

    $validationErrors = validateForm($name, $email, $feedbackType, $comments);

    if (empty($validationErrors)) {
        echo "Đã gửi biểu mẫu thành công!";
    } else {
        echo "Gửi biểu mẫu không thành công. Lỗi:<br>";
        foreach ($validationErrors as $error) {
            echo "- $error<br>";
        }
    }
}