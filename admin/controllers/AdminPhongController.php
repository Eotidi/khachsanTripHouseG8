<?php
class AdminPhongController
{
    public $modelPhong;
    public $modelDanhMuc;

    public function __construct()
    {
        $this->modelPhong = new AdminPhong();
        $this->modelDanhMuc = new AdminDanhMucPhong();
    }

    public function danhSachPhong()
    {

        $listPhong = $this->modelPhong->getAllPhong();

        require_once './views/phong/listPhong.php';
    }
    
    public function formAddPhong()
    {
        // Ham nay dung de hien thi form nhap
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMucPhong();
        require_once './views/phong/addPhong.php';
        // Xoa session sau khi load trang
        // deleteSessionError();
    }

    public function detailPhong()
    {

        // $id = $_GET['id_san_pham'];

        // $phong = $this->modelPhong->getDetailPhong($id);

        // $listAnhPhong = $this->modelPhong->getAnhPhong($id);

        // $listBinhLuan = $this->modelPhong->getBinhLuanFromPhong($id);
        // if ($phong) {
            require_once './views/phong/detailPhong.php';
            // deleteSessionError();
        // } else {
        //     header("Location: " . BASE_URL_ADMIN . '?act=phong');
        //     exit();
        // }
    }
    public function formEditPhong()
    {
        // Ham nay dung de hien thi form nhap
        // Lay ra thong tin cua san pham can sua
        // $id = $_GET['id_san_pham'];
        // $phong = $this->modelPhong->getDetailPhong($id);
        // $listAnhPhong = $this->modelPhong->getListAnhPhong($id);
        // $listDanhMuc = $this->modelDanhMuc->getAllDanhMucPhong($id);
        // if ($phong) {
            require_once './views/phong/editPhong.php';
            // deleteSessionError();
        // } else {
        //     header("Location: " . BASE_URL_ADMIN . '?act=phong');
        //     exit();
        // }
    }
}
?>