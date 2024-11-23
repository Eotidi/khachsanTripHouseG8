<?php
class Phong {
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }

    // Viet ham lay toan bo danh sach san pham
    public function getAllPhong(){
        // Cau lenh SQL
        try{
            $sql = "SELECT * FROM `phongs`";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        }catch(Exception $e){
        }
    }
    
    public function getAllRoom(){
        // Cau lenh SQL
    }
    public function getDetailPhong(){
        // Cau lenh SQL
    }
} 
?>