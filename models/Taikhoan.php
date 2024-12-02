<?php
class TaiKhoan
{
    public $conn; // Khai bao phuong thuc 

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function registerUser($email, $hashedPassword)
    {
        // Chuẩn bị câu lệnh SQL
        try {
            $sql = "INSERT INTO `tai_khoan` (`id`, `email`, `password`) VALUES (NULL, '$email', '$hashedPassword');";

            $this->conn->query($sql);
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function getAllTaiKhoanCL()
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans";

            $stmt = $this->conn->query($sql);
            $data = $stmt->fetchAll();
            return $data;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function getUser($id)
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans WHERE tai_khoans.id= $id";

            $stmt = $this->conn->query($sql);
            $data = $stmt->fetch();
            return $data;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    
}
