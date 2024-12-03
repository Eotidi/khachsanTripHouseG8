<?php
class AdminBaoCaoThongKeController{
    public $modelPhong;
    public $modelDonDat;
    public function __construct()
    {
        $this->modelDonDat = new AdminDonDat();
        $this->modelPhong = new AdminPhong();
    }
    public function home(){
        $listDonDat = $this->modelDonDat->getAllDonDat();
        $listPhong = $this->modelPhong->getAllPhong();
        require_once './views/home.php';
    }
    
}
?>