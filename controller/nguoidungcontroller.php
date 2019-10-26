<?php
    session_start();

    require "../model/khachhangclass.php";   
    require "../model/adminclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'dangxuat':
                # Thoát khỏi session khi đã đăng nhập
                session_destroy();
                header("Location: ../index.php");
            break;
            case 'dangnhap':
                if(isset($_POST["tentaikhoan"]) && isset($_POST["matkhau"])){
                   
                    # lấy user và pass được post qua
                    $tentaikhoan = $_POST["tentaikhoan"];
                    $matkhau = $_POST["matkhau"];

                    $md5 = md5($matkhau, false);

                    # check đăng nhập xem phải là user hay không
                    $nguoiDung = new khachhangclass();
                    $revalue_khachhang = $nguoiDung->checkDangNhap($tentaikhoan, $md5);

                    # check đăng nhập xem phải là admin hay không
                    $nguoiDung = new adminclass();
                    $revalue_admin= $nguoiDung->checkDangNhap($tentaikhoan, $md5);                    

                    if($revalue_khachhang != null || $revalue_admin != null){
                        # neu tai khoan dang nhap la khach hang
                        if($revalue_khachhang == "khachhang"){
                            $_SESSION['khachhang'] = $tentaikhoan;
                            
                            $nguoiDung = new khachhangclass();
                            $thongtin = $nguoiDung->LayMotKhachHangBangTen($tentaikhoan);
                            header("Location: ../index.php?page=quanli&kq=dangnhapthanhcong&hoten=$thongtin->hoten");
                        }
                        # neu tai khoan dang nhap la khach hang
                        if($revalue_admin == "admin"){
                            $_SESSION['admin'] = $tentaikhoan;

                            $admin = new adminclass();
                            $thongtin = $admin->LayMotAdminBangTen($tentaikhoan);
                            header("Location: ../index.php?page=quanli&kq=dangnhapthanhcong&hoten=$thongtin->hoten");
                        }
                    # nếu không phải là admin hay user
                    }else{
                        header("Location: ../index.php?kq=saimatkhau");
                    }
                }
                break;
            
            default:
                # code...
                break;
        }
    }
?>