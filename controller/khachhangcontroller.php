<?php
    session_start();

    require "../model/khachhangclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            
            case 'them':
                $tentaikhoan = trim($_POST['tentaikhoan']);
                $matkhau = trim($_POST['tentaikhoan']);
                $diachi = trim($_POST['tentaikhoan']);
                $sodienthoai = trim($_POST['tentaikhoan']);
                $hoten = trim($_POST['tentaikhoan']);
                $ngaytao = date("Y-m-d");

                $md5 = md5($matkhau, false);

                $khachhang = new khachhangclass();

                if(strlen($tentaikhoan) == 0 || strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($sodienthoai) == 0 || strlen($hoten) == 0){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    $khachhang->ThemKhachHang($tentaikhoan, $md5, $hoten, $diachi, $sodienthoai, $ngaytao);
                    header("Location: ../index.php?page=quanlikhachhang&kq=dathemkhachhang");
                }
            break;
            case 'xoa':
                $makhachhang = $_POST['makhachhang'];

                $khachhang = new khachhangclass();

                if($makhachhang == ""){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    $khachhang->XoaKhachHang($makhachhang);
                    header("Location: ../index.php?page=quanlikhachhang&kq=daxoakhachhang");
                }
                break;
            case 'sua':
                $tentaikhoan = trim($_POST['tentaikhoan']);
                $matkhau = trim($_POST['matkhau']);
                $diachi = trim($_POST['diachi']);
                $sodienthoai = trim($_POST['sodienthoai']);
                $hoten = trim($_POST['hoten']);
                $makhachhang = $_POST['makhachhang'];

                $md5 = md5($matkhau, false);

                $khachhang = new khachhangclass();

                if(strlen($tentaikhoan) == 0 || strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($sodienthoai) == 0 || strlen($hoten) == 0){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    $khachhang->SuaKhachHang($tentaikhoan, $md5, $hoten, $diachi, $sodienthoai, $makhachhang);
                    header("Location: ../index.php?page=quanlikhachhang&kq=dasuakhachhang");
                }

                break;
            default:
                # code...
                break;
        }
    }
?>