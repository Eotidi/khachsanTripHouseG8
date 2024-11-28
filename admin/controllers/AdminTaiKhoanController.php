<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
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

                $chuc_vu_id = 1;

                $this->modelTaiKhoan->insertTaiKhoan(
                    $ho_ten,
                    $email,
                    $dien_thoai,
                    // $password,
                    $chuc_vu_id,
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

    public function deleteQuanTri()
    {
        $id = $_GET['id'];
        $this->modelTaiKhoan->deleteTaiKhoan($id);
        header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
        exit();
    }

    public function formEditQuanTri()
    {
        $id = $_GET['id'];
        $quanTri = $this->modelTaiKhoan->getDetailTaiKhoanQT($id);
        // var_dump($quanTri);die;
        require_once './views/taikhoan/quantri/editQuanTri.php';
        // deleteSessionError();
    }

    public function postEditQt()
    {
        $id = $_GET['id'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $this->modelTaiKhoan->postUpdateQt($id, $ho_ten, $email, $dien_thoai);
        header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
        exit();
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
        // $khachHang = $this->modelTaiKhoan->getDetailTaiKhoan($id_khach_hang);
        // $listDonDat = $this->modelDonDat->getDonDatFromKhachHang($id_khach_hang);
        // $listBinhLuan = $this->modelPhong->getBinhLuanFromKhachHang($id_khach_hang);
        require_once './views/taikhoan/khachhang/detailKhachHang.php';
    }

    public function formLogin()
    {
        require_once "./views/auth/formLogin.php";
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $listUser = $this->modelTaiKhoan->getAllTaiKhoanAD();
            foreach ($listUser as $a) {

                if (($email == $a['email']) && ($password == $a['password'])) {
                    if (($a['trang_thai_id'] == 1) && ($a['chuc_vu_id'] == 1)) {
                        $_SESSION['user_admin'] = $email;
                        header("Location:" . BASE_URL_ADMIN);
                    } elseif ($a['chuc_vu_id'] !== 1) {
                        echo "Tài khoản ko hợp lệ";
                        exit();
                    } elseif ($a['trang_thai_id'] !== 1) {
                        echo "Tài khoản bị cấm";
                        exit();
                    }
                    exit();
                } else {
                    $_SESSION['error'] = $email;
                    $_SESSION['flash'] = true;
                    header("Location:" . BASE_URL_ADMIN . "?act=login-admin");
                    exit();
                }
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
            header('Location:' . BASE_URL_ADMIN . '?act=login-admin');
        }
    }
}
