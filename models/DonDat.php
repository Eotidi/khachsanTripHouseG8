<?php
class DonDat {
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }

    public function getAllDonDat()
    {
        try {
            $sql = "SELECT don_dats.*,
                trang_thai_don_dats.ten_trang_thai,
                tai_khoans.ho_ten,
                tai_khoans.email,
                tai_khoans.dien_thoai
                FROM don_dats 
                INNER JOIN trang_thai_don_dats ON don_dats.trang_thai_id = trang_thai_don_dats.id
                INNER JOIN tai_khoans ON don_dats.tai_khoan_id = tai_khoans.id";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }


//     public function getAllRoom(){
//         // Cau lenh SQL
//     }

//     public function getDetailPhong($id){


//         // Cau lenh SQL
//         try{
//             $sql = "SELECT * FROM `phongs` WHERE `phongs`.`id`=$id";

//             $stmt = $this->conn->prepare($sql);

//             $stmt->execute();

//             return $stmt->fetch();

//         }catch(Exception $e){
//             }
//     }
    
//     public function getAllBinhLuan($id)
//     {
//         try{
//             $sql = "SELECT *
//                     FROM danh_gias
//                     INNER JOIN tai_khoans ON danh_gias.tai_khoan_id = tai_khoans.id
//                     WHERE danh_gias.phong_id = $id;";
//             $stmt = $this->conn->prepare($sql);

//             $stmt->execute();

//             return $stmt->fetchAll();

//         }catch(Exception $e){
//             }
//     }
}
?>