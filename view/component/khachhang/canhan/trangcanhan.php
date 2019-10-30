<!-- 
    # lay ten tai khoan boi SESSION khi dang nhap
    # $tentaikhoan duoc lay tu navbar 
    # tu $tentaikhoan lay ra cac thong tin de hien thi
 -->

<?php

    require "model/khachhangclass.php";

    # kiem tra xem co session khachhang dang nhap hay khong de hien thi ten
    if(isset($_SESSION['khachhang'])){
        $tentaikhoan = $_SESSION['khachhang'];

        $nguoidung = new khachhangclass();
        $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
    }

    // kiem tra lay duoc $tentaikhoan khong, $tentaikhoan lay duoc tu navbar 
    if($tentaikhoan == NULL || $tentaikhoan == ""){
        ?>
            <div class="alert alert-danger" role="alert">
                Không xác định được tài khoản
            </div>  
        <?php
    }else{
        // khong can required khachhangclass() vi no duoc goi vao o navbar roi
        $khachhang = new khachhangclass();
        // lay duoc ten tai khoan de hien thi nhung thong tin cua tai khoan do ra
        $thongtinkhachang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);

        // kiem tra $tentaikhoan co lay duoc thong tin hay khong
        if($thongtinkhachang == NULL){
            ?>
                <div class="alert alert-danger" role="alert">
                    Không lấy được thông tin tài khoản
                </div> 
            <?php
        // kiem tra co lay dung $tentaikhoan cua SESSION khong
        }else if($thongtinkhachang->tentaikhoan == $_SESSION['khachhang']){
            ?>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                    <?php require "title.php"?> 
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 left-ca-nhan" id="suathongtincanhan">
                    <?php require "left.php"?>       
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 table-ca-nhan">
                    <?php require "right.php"?>        
                </div>
            </div>

            <?php
        // khong lay duoc $tentaikhoan or lay sai $tentaikhoan
        }else{
            ?>
                <div class="alert alert-danger" role="alert">
                    Tài khoản không xác định
                </div>
            <?php  
        }
    }
?>

<?php 
    require "view/component/khachhang/modal/modalkhachhang.php";
?>