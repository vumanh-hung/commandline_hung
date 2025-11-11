<?php
// Thông tin kết nối
$servername = "localhost";
$username   = "root";     // mặc định XAMPP user là root
$password   = "";         // mặc định XAMPP root không có password
$database   = "qlithuoc_ankhang"; // thay bằng tên CSDL của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thiết lập UTF-8 để tránh lỗi tiếng Việt
$conn->set_charset("utf8");
?>
