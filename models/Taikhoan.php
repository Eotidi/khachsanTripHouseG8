<?php
class TaiKhoan
{
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }
}