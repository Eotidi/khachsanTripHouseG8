<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS
// Duong dan den phan client 
define('BASE_URL', 'http://localhost/khachsanTripHouseG8/');
// Duong dan den phan admin
define('BASE_URL_ADMIN', 'http://localhost/khachsanTripHouseG8/admin/');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'triphousedb');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
//TDcommit