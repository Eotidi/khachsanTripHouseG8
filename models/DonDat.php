<?php
class DonDat {
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }

    public function postBooking($tai_khoan_id,$phong_id,$check_in,$check_out,$trang_thai_id,$phuong_thuc_id,$don_gia)
    {
        $sql = "INSERT INTO `don_dats` (`tai_khoan_id`, `phong_id`, `check_in`, `check_out`, `trang_thai_id`, `don_gia`, `phuong_thuc_id`) VALUES ('$tai_khoan_id', '$phong_id', '$check_in', '$check_out', '$trang_thai_id','$don_gia', '$phuong_thuc_id')";
        $this->conn->query($sql);
    }

    public function changeStatus($phong_id)
    {
        $sql = "UPDATE `phongs` SET `trang_thai_id` = '2' WHERE `phongs`.`id` = $phong_id";
        $this->conn->query($sql);
    }
    public function getAllDonDat($id)
    {
        try {
            $sql = "SELECT *
                    FROM `don_dats`
                    INNER JOIN `tai_khoans`
                    ON `don_dats`.`tai_khoan_id` = `tai_khoans`.`id`
                    WHERE `don_dats`.`tai_khoan_id` = $id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
}
?>