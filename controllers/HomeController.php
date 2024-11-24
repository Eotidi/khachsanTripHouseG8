<?php
class HomeController
{
    public $modelPhong;
    public $modelTaiKhoan;
    public function __construct()
    {
        $this->modelPhong = new Phong;
        $this->modelTaiKhoan = new TaiKhoan;
    }
    public function home()
    {
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/home.php';
    }

    public function phong()
    {
        require_once './views/phong.php';
    }

    public function danhSachPhong()
    {
        // echo "This is danh sach san pham";
        $listPhong = $this->modelPhong->getAllRoom();
        // var_dump($listProduct);die();
        require_once './views/listPhong.php';
    }

    public function chiTietPhong()
    {
        // Ham nay dung de hien thi form nhap
        // Lay ra thong tin cua san pham can sua
        $id = $_GET['id'];
        $phongDetail = $this->modelPhong->getDetailPhong($id);
        $listBinhLuan = $this->modelPhong->getAllBinhLuan($id);
        require_once './views/detailPhong.php';
    }

    public function formLogin()
    {
        require_once "./views/auth/formLogin.php";
        // deleteSessionError();
    }

    public function postLogin()
    {
        // PHP
    } 

    public function gioiThieu(){
        require_once './views/introduce.php';
    }

    public function lienHe(){
        require_once './views/contact.php';
    }

    public function blog(){
        require_once './views/blog.php';
    }

    public function donDat(){
        require_once './views/donDat.php';
    }
}
