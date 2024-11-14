<?php

class AdminPhong{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllPhong(){
        // Câu lệnh truy vấn SQL
    }
}
?>