<?php
class DonDat {
    public $conn; // Khai bao phuong thuc 

    public function __construct(){
        $this->conn = connectDB();
    }

    public function postBooking($tai_khoan_id,$phong_id,$check_in,$check_out,$trang_thai_id,$phuong_thuc_id,$don_gia)
    {
        $sql = "INSERT INTO `don_dats` (`tai_khoan_id`, `phong_id`, `check_in`, `check_out`, `trang_thai_id`, `don_gia`, `phuong_thuc_id`) VALUES ('$tai_khoan_id', '$phong_id', '$check_in', '$check_out', '$trang_thai_id', '$phuong_thuc_id', '$don_gia')";
        $this->conn->query($sql);
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
}
?>