<?php
    session_start();

    require "../model/hanghoaclass.php";  
    require "../model/donhangchoclass.php";       
    require "../model/khachhangclass.php";
    require "../model/chitiethanghoaclass.php";
        

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'themdonhangcho':

            if (isset($_SESSION['khachhang'])) {
                $tentaikhoan = $_SESSION['khachhang'];

                $nguoidung = new khachhangclass();
                $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);

                $makhachhang = $thongtin->makhachhang;

                if($makhachhang == ""){
                    header("Location: ../index.php?page=quanli&kq=khonglayduocthontinkhachhang");
                }else{
                    $ngaytao = date("Y-m-d");

                    $donhangcho = new donhangchoclass();
                    $donhangcho->ThemDonHangCho($ngaytao, $makhachhang);
                    header("Location: ../index.php?page=taodonhangcho&kq=khoitaodonhangchothanhcong");
                }
            }
                
            break;
            case 'themhanghoachodonhangcho':
                $mahanghoa = $_POST['mahang'];
                $soluong = $_POST['soluong'];

                if (isset($_SESSION['khachhang'])) {
                    $tentaikhoan = $_SESSION['khachhang'];
    
                    $nguoidung = new khachhangclass();
                    $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                    $makhachhang = $thongtin->makhachhang;

                    $donhang = new donhangchoclass();
                    $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);

                    $madonhangcho = $thongtin->MAX;

                    $chitiethanghoa = new chitiethanghoaclass();
                    $chitiethanghoa->ThemChiTietHangHoa($mahanghoa, $soluong, $madonhangcho);

                    header("Location: ../index.php?page=taodonhangcho&kq=dathemhang");
                }else{
                    header("Location: ../index.php?page=quanli&kq=khonglayduocthontinkhachhang");
                }

               
            break;
            case 'guichoadmin':
                    $tentaikhoan = $_SESSION['khachhang'];
    
                    $nguoidung = new khachhangclass();
                    $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                    $makhachhang = $thongtin->makhachhang;

                    $donhang = new donhangchoclass();
                    $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);

                    $madonhangcho = $thongtin->MAX;

                    $gui = new donhangchoclass();
                    $gui->GuiDonHangChoAdmin($madonhangcho);

                    header("Location: ../index.php?page=donhangcho&kq=daguidonhangcho");
                break;
            case 'sua':
                
                break;
            default:
                # code...
                break;
        }
    }
?>