<?php
    class databaseKhachHang{
        public $connect;
        public function databaseKhachHang(){
            try {
                $this->connect = new PDO('mysql:host=localhost;dbname=QLBanHang;charset=utf8','root','');
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Throwable $th) {
                echo "Loi ket noi co so du lieu";
                $this->connect = null;
            }
        }
    }
?>