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
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);

        require_once './views/taikhoan/quantri/listQuanTri.php';
    }

    public function formAddQuanTri()
    {
        require_once './views/taikhoan/quantri/addQuanTri.php';

        // deleteSessionError();
    }
    public function postAddQuanTri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ho_ten = $_POST['ho_ten'] ?? '';
            $email = $_POST['email'] ?? '';
            $dien_thoai = $_POST['dien_thoai'] ?? '';

            $error = [];
            if (empty($ho_ten)) {
                $error['ho_ten'] = "Họ tên không được để trống";
            }
            if (empty($email)) {
                $error['email'] = "Email không được để trống";
            }
            $_SESSION['error'] = $error;
            if (empty($error)) {
                $password = password_hash('123456', PASSWORD_BCRYPT);

                $chuc_vu_id = 1;

                $this->modelTaiKhoan->insertTaiKhoan(
                    $ho_ten,
                    $email,
                    $dien_thoai,
                    $password,
                    $chuc_vu_id
                );

                header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            } else {
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL_ADMIN . '?act=form-them-quan-tri');
                exit();
            }
        }
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
        $listKhachHang = $this->modelTaiKhoan->getAllTaiKhoan(2);

        require_once './views/taikhoan/khachhang/listKhachHang.php';
    }

    public function formEditKhachHang()
    {
        require_once './views/taikhoan/khachhang/editKhachHang.php';
        // deleteSessionError();
    }

    public function detailKhachHang()
    {
        $id_khach_hang = $_GET['id'];
        $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id_khach_hang);
        // $listDonDat = $this->modelDonDat->getDonDatFromKhachHang($id_khach_hang);
        // $listBinhLuan = $this->modelPhong->getBinhLuanFromKhachHang($id_khach_hang);
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
