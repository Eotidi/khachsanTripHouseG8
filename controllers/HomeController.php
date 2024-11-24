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
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/phong.php';
    }

    public function chiTietPhong()
    {
        $phongDetail = $this->modelPhong->getDetailPhong();

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
