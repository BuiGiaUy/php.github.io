<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Form Submission Result</title>
</head>
<body>
<h2>Form Submission Result</h2>
<?php
// Lấy dữ liệu từ form
    $name = $_POST['name'];
    $email = $_POST['email'];

    function validateName($name) {
        if (empty($name)) {
            return false;
        }

        if (!preg_match("/^[a-zA-Z0-9 ]+$/", $name)) {
            return false;
        }
        $nameLength = strlen($name);
        if ($nameLength < 3 || $nameLength > 255 ) {
            return false;
        }
        return true;
    }

    function validateEmail($email) {
        if (empty($email)) {
            return false;
        }

        if (strpos($email, '@') === false) {
            return false;
        }

        $parts = explode('@', $email);
        if (count($parts) !== 2) {
            return false;
        }

        $domain = $parts[1];
        if (!preg_match("/^[a-zA-Z0-9.-]+$/", $domain)) {
            return false;
        }
        return true;

    }
    if (validateName($name)) {
        echo "Tên hợp lệ: $name<br>";
    } else {
        echo "Tên không hợp lệ<br>";
    }

    if (validateEmail($email)) {
        echo "Email hợp lệ: $email<br>";
    } else {
        echo "Email không hợp lệ<br>";
    }
?>
</body>
</html>