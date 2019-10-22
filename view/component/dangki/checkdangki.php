<?php
    # Từ hàm checkEmailDangKi() của checkDangKi-DangNhap lấy được email để kiểm tra tài khoản email đã được sử dụng chưa

    require "../../../model/khachhangclass.php";

   if(isset($_REQUEST['tentaikhoan'])){
        $tentaikhoan = $_REQUEST['tentaikhoan'];

        if(strlen($tentaikhoan) < 1){
            echo "<small style='color: red'><b>Số điện thoại không được để rỗng</b></small>";
        }else if(strlen($tentaikhoan) < 10){
            echo "<small style='color: red'><b>Số điện thoại phải từ 10 kí tự</b></small>";
        }else{
            $check = new khachhangclass();
            $count = $check->checkTenKhachHang($tentaikhoan);
           
            if($count >= 1){
                echo "<small style='color: red'><b>Số điện thoại đã được sử dụng</b></small>";
            }else if($count == 0){
                echo "<small style='color: MediumSeaGreen'><b>Bạn có thể sử dụng số điện thoại này</b></small>";
            }else{
                echo "<small style='color: red'><b>Lỗi không xác định</b></small>";
            }
        }
    }

    if(isset($_REQUEST['sodienthoai'])){
        $sodienthoai = $_REQUEST['sodienthoai'];

        $check = new khachhangclass();
        $count = $check->KiemTraSoDienThoai($sodienthoai);
       
        if($count >= 1){
            echo "<small style='color: red'><b>Số điện thoại đã được sử dụng</b></small>";
        }
    }

?>