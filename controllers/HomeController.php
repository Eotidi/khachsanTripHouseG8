<?php
class HomeController
{
    public $modelPhong;
    public $modelTaiKhoan;
    public $modelDonDat;
    public function __construct()
    {
        $this->modelPhong = new Phong;
        $this->modelTaiKhoan = new TaiKhoan;
        $this->modelDonDat = new DonDat;
    }
    public function home()
    {
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/home.php';
    }

    public function phong()
    {
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/phong.php';
    }

    public function chiTietPhong()
    {
        $id = $_GET['id'];
        $phongDetail = $this->modelPhong->getDetailPhong($id);
        $listBinhLuan = $this->modelPhong->getAllBinhLuan($id);
        $listPhong = $this->modelPhong->getAllPhong();


        require_once './views/detailPhong.php';
    }

    public function formLogin()
    {
        require_once "./views/auth/formLogin.php";
        // deleteSessionError();
    }

    public function formRegister()
    {
        require_once "./views/auth/formRegister.php";
    }
    public function postRegister()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST["confirm_password"];
            $error = [];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error[] = "Email không hợp lệ.";
            }
            if (strlen($password) < 6) {
                $error[] = "Mật khẩu phải có ít nhất 6 ký tự.";
            }
            if ($password !== $confirmPassword) {
                $error[] = "Mật khẩu xác nhận không khớp.";
            }

            if (empty($error)) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $this->modelTaiKhoan->registerUser($email, $hashedPassword);
                echo "<script>alert('Đăng ký thành công!');</script>";
                header("Location: " . BASE_URL . '?act=login');
                exit();
            } else {
                $errorMessage = implode("\\n", $error);
                echo "<script>alert('$errorMessage');</script>";
                header("Location: " . BASE_URL . '?act=register');
                exit();
            }
        }
    }
    public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $listUser = $this->modelTaiKhoan->getAllTaiKhoanCL();
            foreach ($listUser as $a) {
                if (($email == $a['email']) && ($password == $a['password'])) {
                    if (($a['trang_thai_id'] == 2) && ($a['chuc_vu_id'] == 2)) {
                        $_SESSION['user_name'] = $a['email'];
                        header("Location:" . BASE_URL);
                    } elseif ($a['chuc_vu_id'] !== 2) {
                        echo "<script>alert('Tài khoản ko hợp lệ !');</script>";
                        exit();
                    } elseif ($a['trang_thai_id'] !== 2) {
                        echo "<script>alert('Tài khoản bị cấm !');</script>";
                        exit();
                    }
                    exit();
                } else {
                    echo "Loi";
                }
            }
        }
    }

    public function gioiThieu()
    {
        require_once './views/introduce.php';
    }

    public function lienHe()
    {
        require_once './views/contact.php';
    }

    public function blog()
    {
        require_once './views/blog.php';
    }

    public function donDat()
    {
        $listDon = $this->modelDonDat->getAllDonDat();
        require_once './views/donDat.php';
    }
}
