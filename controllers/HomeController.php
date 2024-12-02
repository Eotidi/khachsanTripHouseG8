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

        // Ham nay dung de hien thi form nhap
        // Lay ra thong tin cua san pham can sua
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

    // public function postRegister()
    // {
    //     if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //         $email = $_POST['email'];
    //         $password = $_POST['password'];
    //         $confirmPassword = $_POST["confirm_password"];

    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             echo ("LOI");
    //         }
    //         if (strlen($password) < 6) {
    //             echo ("LOI");
    //         }
    //         if ($password !== $confirmPassword) {
    //             echo ("LOI");
    //         }
    //         $correct = "Thành công !";
    //         $inCorrect = "Thất bại !";
    //         if (empty($error)) {
    //             $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //             $this->modelTaiKhoan->registerUser(
    //                 $email,
    //                 $hashedPassword
    //             );
    //             echo "<script>alert('$correct');</script>";
    //             header("Location:" . BASE_URL . '?act=login');
    //             exit();
    //         } else {
    //             echo "<script>alert('$inCorrect');</script>";
    //             header("Location:" . BASE_URL . '?act=register');
    //             exit();
    //         }
    //     }
    // }
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
                        $_SESSION['user_id'] = $a['id'];
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
        $id = $_SESSION['user_id'];
        $listDon = $this->modelDonDat->getAllDonDat($id);
        require_once './views/donDat.php';
    }

    public function addDondat()
    {
        $tai_khoan_id = $_POST['tai_khoan_id'];
        $phong_id = $_POST['phong_id'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $trang_thai_id = $_POST['trang_thai_id'];
        $phuong_thuc_id = $_POST['phuong_thuc_id'];
        $don_gia = $_POST['don_gia'];
        $this->modelDonDat->postBooking($tai_khoan_id,$phong_id,$check_in,$check_out,$trang_thai_id,$phuong_thuc_id,$don_gia);
        $this->modelDonDat->changeStatus($phong_id);
        header("Location: " . BASE_URL . '?act=don-dat');
    }
    public function logOut()
    {
        session_destroy();
        header("Location: " . BASE_URL . '?act=login');
    }
}
