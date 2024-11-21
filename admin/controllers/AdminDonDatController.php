<?php
class AdminDonDatController
{
    public $modelDonDat;

    public function __construct()
    {
        $this->modelDonDat = new AdminDonDat();
    }
    public function danhSachDonDat()
    {

        $listDonDat = $this->modelDonDat->getAllDonDat();

        require_once './views/dondat/listDonDat.php';
    }

    public function formEditDonDat()
    {
        $id = $_GET['id'];
        $donDat = $this->modelDonDat->getDetailDonDat($id);
        // if ($donDat) {
            require_once './views/dondat/editDonDat.php';
        // } else {
        //     header("Location: " . BASE_URL_ADMIN . '?act=don-dat');
        //     exit();
        // }
        
    }

    public function postEditDonDat()
    {
        $id = $_GET['id'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $trang_thai_id = $_POST['trang_thai_id'];
        $ghi_chu = $_POST['ghi_chu'] ?? null;
        $this->modelDonDat->updateDonDat($id,$check_in,$check_out,$trang_thai_id,$ghi_chu);
        header("Location: " . BASE_URL_ADMIN . '?act=don-dat');
                exit();
    }

    public function detailDonDat()
    {
        $id = $_GET['id'] ?? null; 

        if ($id === null) {
            echo "ID is required.";
            return; 
        }
        
        $donDat = $this->modelDonDat->getDetailDonDat($id);
        
        $donDatPhong = $this->modelDonDat->getListDonDat($id);

        $listTrangThaiDonDat = $this->modelDonDat->getAllTrangThaiDonDat();

            require_once './views/dondat/detailDonDat.php';
    }
}
//