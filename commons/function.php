<?php

// Kết nối CSDL qua PDO
function connectDB()
{
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }

    function deleteSessionError()
    {
        if (isset($_SESSION['flash'])) {
            unset($_SESSION['flash']);
            unset($_SESSION['error']);
        }
    }

    function checkLoginAdmin()
    {
        if (!isset($_SESSION['user_admin'])) { 
            header("Location: " . BASE_URL_ADMIN . '?act=login-admin');
            exit();
        }
    }
}
