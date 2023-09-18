<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Authentication</title>
</head>
<body>
<h1>Login Form</h1>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $expected_username = "giauy";
            $expected_password = "123456";

            if ($username === $expected_username && $password === $expected_password) {
                echo "<p>Đăng nhập thành công. Chào mừng, $username!</p>";
        } else {
            echo "<p style='color: red;'>Tên người dùng hoặc mật khẩu không chính xác. Vui lòng thử lại.</p>";
            }
        }
?>

<form action="#" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" value="Login">
</form>
</body>
</html>