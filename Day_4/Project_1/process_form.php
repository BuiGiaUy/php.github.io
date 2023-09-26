<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $date_of_birth = $_POST["dob"];
    $address = $_POST["address"];

    $errors = [];
    $is_validate = true;

    // Validate
    function validate_name($name, &$errors)
    {
        global $is_validate;



        $min_length = 3;
        $max_length = 50;
        $name_length = strlen($name);
        if ($name_length < $min_length || $name_length > $max_length) {
            $errors[] = "Họ và Tên phải có từ " . $min_length . " đến " . $max_length . " ký tự.";
            $is_validate = false;
        }

        if (preg_match('/[1!@#$%^&*()_+\-=\[\]{};:\'"\\|,.<>\/?]+/', $name)) {
            $errors[] = "Họ và Tên không được chứa ký tự đặc biệt hoặc số.";
            $is_validate = false;
        }
    }
    function validate_password($password, &$errors)
    {
        global $is_validate;
        if (strlen($password) < 8) {
            $errors[] = "Mật khẩu phải có ít nhất 8 ký tự";
            $is_validate = false;
        }
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
            $errors[] = "Mật khẩu phải chứa ít nhất một chữ cái viết hoa, một chữ cái viết thường, một số và một ký tự đặc biệt";
            $is_validate = false;
        }
    }
    function validate_email($email, &$errors) {
        global $is_validate;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Định dạng email không hợp lệ";
            $is_validate = false;

        }
        $max_length = 255;
        if (strlen($email) > $max_length) {
            $errors[] = "Email không được vượt quá " . $max_length . " ký tự.";
            $is_validate = false;
        }
    }

    function validate_date_of_birth($dob, &$errors) {
        global $is_validate;
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
            $errors[] = "Định dạng ngày tháng năm không hợp lệ. Sử dụng định dạng YYYY-MM-DD.";
            $is_validate = false;
        }
    }
    function validate_confirm_password($confirm_password, $password, &$errors)
    {
        global $is_validate;

        if ($confirm_password !== $password) {
            $errors[] = "Xác nhận Mật khẩu không khớp với Mật khẩu.";
            $is_validate = false;
        }
    }
    validate_email($email, $errors);
    validate_name($full_name,$errors);
    validate_password($password,$errors);
    validate_date_of_birth($date_of_birth, $errors);
    validate_confirm_password($confirm_password,$password , $errors);

    if($is_validate){
        echo "Đã thêm thành công";
    }else {
        echo"<pre>";
        print_r($errors);
        echo "</pre>";
    }



}