<?php

class AdminDonDat
{
    public $conn;

    public function __construct()
    {
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

    public function getDetailDonDat($id)
    {
        try {
            $sql = 'SELECT don_dats.*,
            trang_thai_don_dats.ten_trang_thai, 
            tai_khoans.ho_ten,
            tai_khoans.email,
            tai_khoans.dien_thoai,
            phuong_thuc_thanh_toans.ten_phuong_thuc
            FROM don_dats 
            INNER JOIN trang_thai_don_dats ON don_dats.trang_thai_id = trang_thai_don_dats.id
            INNER JOIN tai_khoans ON don_dats.tai_khoan_id = tai_khoans.id
            INNER JOIN phuong_thuc_thanh_toans ON don_dats.phuong_thuc_id = phuong_thuc_thanh_toans.id
            WHERE don_dats.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id,
            ]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function getListDonDat($id)
    {
        try {
            $sql = 'SELECT chi_tiet_don_dats.*,phongs.ten_phong
            FROM chi_tiet_don_dats 
            INNER JOIN phongs ON chi_tiet_don_dats.phong_id = phongs.id
            WHERE chi_tiet_don_dats.don_dat_id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id,
            ]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function updateDonDat($id,$ho_ten,$dien_thoai,$check_in,$check_out,$email,$trang_thai_id,$ghi_chu)
    {
        try {
            $sql = "UPDATE `don_dats` SET `ho_ten` = '{$ho_ten}' , `dien_thoai` = '{$dien_thoai}'
            , `check_in` = '{$check_in}', `check_out` = '{$check_out}'
            , `email` = '{$email}', `trang_thai_id` = '{$trang_thai_id}
            , `ghi_chu` = '{$ghi_chu}'WHERE `don_dats`.`id` = $id";
        $this->conn->query($sql);
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function getAllTrangThaiDonDat()
    {
        try {
            $sql = "SELECT * FROM trang_thai_don_dats";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
}
