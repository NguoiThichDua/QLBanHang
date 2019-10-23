<?php
    session_start();
    require "../model/hangtonclass.php"; 
    require "../model/chitiethangtonclass.php";
    require "../model/khachhangclass.php";  
        

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'themdonhangton':

                if(isset($_SESSION['khachhang'])){
                    $ngaytao = $ngaytao = date("Y-m-d");
                    $tentaikhoan = $_SESSION['khachhang'];

                    # lay ma khach hang de tien hang them don hang ton moi
                    $khachhang = new khachhangclass();
                    $khachhang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);
                    $makhachhang = $khachhang->makhachhang;

                    $hangton = new hangtonclass();
                    $hangton->Themhangton($ngaytao, $makhachhang);

                    header("Location: ../index.php?page=taodonhangtonmoi");
                }else{
                    header("Location: ../index.php?page=quanlihangton&kq=thongtinrong");
                }
            break;

            case 'huybocapnhathangton':
                if(isset($_REQUEST['mahangton'])){
                    $mahangton = $_REQUEST['mahangton'];
                   
                    # xoa cac hang hoa trong chitiethangton truoc
                    $xoachitiethangton = new chitiethangtonclass();
                    $xoachitiethangton->XoaChiTietHangTonBoiMaHangTon($mahangton);
    
                    # xoa hangton sau
                    $xoahangton = new hangtonclass();
                    $xoahangton->Xoahangton($mahangton);
                    
                    header("Location: ../index.php?page=quanlihangton");
                }else{
                    header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                }
               
                break;

            case 'huymonhangkhoihangton':
                if(isset($_REQUEST['mahangton']) && isset($_REQUEST['mactht'])){
                    $mahangton = $_REQUEST['mahangton'];
                    $mactht = $_REQUEST['mactht'];

                    $chitiethangton = new chitiethangtonclass();
                    $chitiethangton->XoaChiTietHangTon($mahangton, $mactht);
                    header("Location: ../index.php?page=taodonhangtonmoi");

                }else{
                    header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                }
                break;

            case 'suamonhangcuahangton':
                if(isset($_REQUEST['mahangton'])){
                    $mahangton = $_REQUEST['mahangton'];

                    if(isset($_POST['soluong']) && isset($_POST['mactht'])){
                        $soluong = $_POST['soluong'];
                        $mactht = $_POST['mactht'];

                        $chitiethangton = new chitiethangtonclass();
                        $chitiethangton->SuaSoLuongChiTietHangTon($soluong, $mahangton, $mactht);
                        header("Location: ../index.php?page=taodonhangtonmoi");

                    }else{
                        header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                    }
                }else{
                    header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                }
                break;
            default:
                # code...
                break;
        }
    }
?>