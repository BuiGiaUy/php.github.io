<?php
    session_start();
    require_once __DIR__ . '/lib/flash.php';
    require_once __DIR__ . '/lib/functions.php';

    // 1. Cấu hình các định dạng file cho upload
    const ALLOWED_FILES = [
        'image/png' => 'png',
        'image/jpeg' => 'jpeg',
        // viết thêm code
    ];
    // 2.Cấu hình dung lượng file lớn nhất được upload
    const MAX_SIZE = 5 * 1024 * 1024; //  5MB
    // 3. Cấu hình thư mục upload ảnh
    const UPLOAD_DIR = __DIR__ . '/uploads';

    // 4. Nhạn dữ liệu từ  form
    $is_post_request = strtolower($_SERVER['REQUEST_METHOD']) === 'post';
    $has_file = isset($_FILES['file']);


    // 5. Kiểm tra file có tồn tại không, loại method
    // Viết code
    if (!$is_post_request || !$has_file) {
        redirect_with_message("File khong ton tai!", FLASH_ERROR);
    }

    // 6. Kiểm tra file
    $status = $_FILES['file']['error'];
    $filename = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];


    // 6.1 Kiểm tra file upload có thành công không
    // Viết code
    if ($status !== UPLOAD_ERR_OK) {
        redirect_with_message( get_message($status));
    }
    // 6.2 Kiểm tra dung lượng file
    // Viết code
    $file_size = filesize($tmp);
    if ($file_size >MAX_SIZE) {
        redirect_with_message("File qua dung luong", FLASH_ERROR);
    }
    // 6.3 Kiểm tra loại file upload
    // Viết code
    $mine_type = get_mime_type(($tmp));
    if (!in_array($mine_type,array_keys(ALLOWED_FILES))) {
        redirect_with_message("khong dung dinh dang");
    }
    // 7. Chuyển file từ folder tạm sang folder lưu chính
    // Viết code
    $upload_file= pathinfo($filename, PATHINFO_FILENAME) . "project_3" .ALLOWED_FILES[$mine_type];
    $file_path = UPLOAD_DIR. "/".$upload_file;
    $sucess = move_uploaded_file($tmp,$file_path);

    // 8. Hoàn thành điều hướng về index.php
    header("Location: /Day_5/upload/PHP_Cources/Projects/project_3/");