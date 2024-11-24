<?php
class Phong {
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }

    public function getAllPhong(){
        // Cau lenh SQL
        try{
            $sql = "SELECT * FROM `phongs`";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        }catch(Exception $e){
            echo($e);
        }
    }
    public function getDetailPhong(){
        // Cau lenh SQL
    }
} 
?>