<?php
    class databaseHangTon{
        public $connect;
        public function databaseHangTon(){
            try {
                require "ketnoi.php";
            } catch (Throwable $th) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Kết nối dữ liệu đến tài khoản quản trị bị lỗi...! Vui lòng liên hệ nhân viên kĩ thuật...!
                    </div>
                <?php
                $this->connect = null;
            }
        }
    }
?>