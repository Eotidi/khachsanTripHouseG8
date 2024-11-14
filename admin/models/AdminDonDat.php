<?php

class AdminDonDat
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllDonDat(){
        // Câu lệnh truy vấn SQL
    }
}
