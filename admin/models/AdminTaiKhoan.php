<?php
class AdminTaiKhoan
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllTaiKhoan($chuc_vu_id)
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans WHERE chuc_vu_id = :chuc_vu_id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':chuc_vu_id' => $chuc_vu_id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function insertTaiKhoan(
        $ho_ten,
        $email,
        $dien_thoai,
        $password,
        $chuc_vu_id
    ) {
        try {
            $sql = 'INSERT INTO tai_khoans ( ho_ten, email, mat_khau, chuc_vu_id,dien_thoai) 
            VALUES (:ho_ten, :email, :password, :chuc_vu_id,:dien_thoai)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':ho_ten' => $ho_ten,
                ':email' => $email,
                ':dien_thoai' => $dien_thoai,
                ':password' => $password,
                ':chuc_vu_id' => $chuc_vu_id
            ]);

            return true;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function getDetailTaiKhoan()
    {
        //    Cau lenh SQL
    }

    public function checkLogin()
    {
        //    Cau lenh SQL ket hop PHP

    }
}
