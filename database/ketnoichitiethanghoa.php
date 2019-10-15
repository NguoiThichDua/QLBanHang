<?php
    class databaseChiTietKetNoiHangHoa{
        public $connect;
        public function databaseChiTietKetNoiHangHoa(){
            try {
                require "ketnoi.php";
            } catch (Throwable $th) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Kết nối dữ liệu đến chi tiết kết nối hàng hoá bị lỗi...! Vui lòng liên hệ nhân viên kĩ thuật...!
                    </div>
                <?php
                $this->connect = null;
            }
        }
    }
?>