<?php
    session_start();

    require "../model/chitiethangtonclass.php";  
    require "../model/hangtonclass.php";  
    require "../model/khachhangclass.php";  
        

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'themchitiethangton':
                # kiem tra cac truong du lieu co POST qua du hay khong
                if(isset($_POST['tenhang']) && isset($_POST['soluong'])){
                    $tenhang = $_POST['tenhang'];
                    $soluong = $_POST['soluong'];

                    # lay ma khach hang
                    $tentaikhoan = $_SESSION['khachhang'];
                    $khachhang = new khachhangclass();
                    $khachhang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);
                    $makhachhang = $khachhang->makhachhang;

                    # tao don hang ton cho chi tiet hang ton (lay ma hang ton moi nhat cua khach)
                    $hangton = new hangtonclass();
                    $mahangton = $hangton->LayMaxHangTon($makhachhang);
                    $maxmahangton = $mahangton->donhangtonmoinhat;

                    # kiem tra mon hang da co trong cthh hay chua
                    $hanghoa = new chitiethangtonclass();
                    $tongsoluong = $hanghoa->KiemTraHangHoaDaChon($tenhang, $maxmahangton);

                    # kiem tra cac dieu kien khac
                    if($tenhang == "" && $soluong < 0){
                        header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                    }else if($tongsoluong >= 1){
                        header("Location: ../index.php?page=taodonhangtonmoi&kq=datontaimonhang");
                    }else{
                        if(isset($_SESSION['khachhang'])){
                            # them chi tiet hang ton vao don hang ton tao o tren
                            $chitiethangton = new chitiethangtonclass();
                            $chitiethangton->ThemChiTietHangTon($tenhang, $soluong, $maxmahangton);
                            
                            header("Location: ../index.php?page=taodonhangtonmoi&kq=dathemhang");
                        }else{
                            header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                        }
                    }
                }
                else{
                    header("Location: ../index.php?page=taodonhangtonmoi&kq=thongtinrong");
                }
            break;
            default:
                # code...
                break;
        }
    }
?>