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
            require_once './views/dondat/editDonDat.php';
     }

     public function detailDonDat(){

        require_once './views/dondat/detailDonDat.php';

    }
}
?>