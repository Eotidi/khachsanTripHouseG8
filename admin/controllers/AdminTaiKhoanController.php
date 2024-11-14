<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;
    public $modelDonDat;
    public $modelPhong;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
        $this->modelDonDat = new AdminDonDat();
        $this->modelPhong = new AdminPhong();
    }

    public function danhSachQuanTri()
    {
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan();

        require_once './views/taikhoan/quantri/listQuanTri.php';
    }

    public function formAddQuanTri()
    {
        require_once './views/taikhoan/quantri/addQuanTri.php';

        // deleteSessionError();
    }

    public function formEditQuanTri()
    {
        // $id_quan_tri = $_GET['id_quan_tri'];
        // $quanTri = $this->modelTaiKhoan->getDetailTaiKhoan($id_quan_tri);

        require_once './views/taikhoan/quantri/editQuanTri.php';
        // deleteSessionError();
    }

    public function danhSachKhachHang()
    {
        $listKhachHang = $this->modelTaiKhoan->getAllTaiKhoan();

        require_once './views/taikhoan/khachhang/listKhachHang.php';
    }

    public function formEditKhachHang()
    {
        // $id_khach_hang = $_GET['id_khach_hang'];
        // $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id_khach_hang);

        require_once './views/taikhoan/khachhang/editKhachHang.php';
        // deleteSessionError();
    }

    public function detailKhachHang()
    {
        // $id_khach_hang = $_GET['id_khach_hang'];
        // $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id_khach_hang);

        require_once './views/taikhoan/khachhang/detailKhachHang.php';
    }

    public function formLogin()
    {
        require_once "./views/auth/formLogin.php";
        // deleteSessionError();
    }

    public function login()
    {
        // PHP
    }

    public function logout()
    {
        // PHP
    }
}
?>