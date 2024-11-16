<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models

require_once './models/Phong.php';
require_once './models/Taikhoan.php';
// Route
$act = $_GET['act'] ?? '/';

match ($act) {
    // route
    '/' => (new HomeController())->home(), // Truong hop dac biet

    'phong' => (new HomeController())->phong(),

    'danh-sach-phong' => (new HomeController())->danhSachPhong(),
    
    'chi-tiet-phong' => (new HomeController())->chiTietPhong(),

    'login' => (new HomeController())->formLogin(),

    'check-login'=> (new HomeController())->postLogin(),

    'gioi-thieu' => (new HomeController())->gioiThieu(),

    'lien-he' => (new HomeController())->lienHe(),

    'blog' => (new HomeController())->blog(),

//MinQ
};