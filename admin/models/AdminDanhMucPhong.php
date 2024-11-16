<?php

class AdminDanhMucPhong{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();

    }

    public function getAllDanhMucPhong(){
        
        try {
            $sql = "SELECT * FROM `loaiphong`";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll();
        return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function deleteDanhMuc($id)
    {
        try {
            $sql =  "DELETE FROM loaiphong WHERE `loaiphong`.`loai_id` = $id";
            $this->conn->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function postAddDanhMucPhong($ten_loai, $mo_ta)
    {
        try {
            $sql = "INSERT INTO `loaiphong` (`ten_loai`, `mo_ta`) VALUES ('$ten_loai', '$mo_ta')";
        $this->conn->query($sql);
        } catch (\Throwable $a) {
            echo $a;
        }
    }

    
    public function getDetailDanhMucPhong($id){
        
        try {
            $sql = "SELECT * FROM `loaiphong` WHERE `loaiphong`.`loai_id`=$id";
            $stmt = $this->conn->query($sql);
            $data = $stmt->fetch();
            return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function updateDanhMucPhong($id,$ten_loai, $mo_ta)
    {
        
        try {
            $sql = "UPDATE `loaiphong` SET `ten_loai` = '$ten_loai', `mo_ta` = '$mo_ta' WHERE `loaiphong`.`loai_id` = $id";
        $this->conn->query($sql);
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}

?>