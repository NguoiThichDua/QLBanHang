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

                     # kiem tra hang hoa da them vao don hang cho chua (chua->them || roi->update so luong)
                    $checkhanghoa = new donhangchoclass();
                    $sosanpham = $checkhanghoa->KiemTraHangHoaCoTrongDonHangCho($madonhangcho, $mahanghoa);

                    if($sosanpham->soluong > 0){
                        header("Location: ../index.php?page=taodonhangcho&kq=datontaimonhang");
                    }else{
                        $chitiethanghoa = new chitiethanghoaclass();
                        $chitiethanghoa->ThemChiTietHangHoa($mahanghoa, $soluong, $madonhangcho);
                        header("Location: ../index.php?page=taodonhangcho&kq=dathemhang");
                    }
                   

                  
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

                    $ghichu = $_POST['ghichu'];

                    $gui = new donhangchoclass();
                    $gui->GuiDonHangChoAdmin($ghichu,$madonhangcho);

                    header("Location: ../index.php?page=donhangcho&kq=daguidonhangcho");
                break;
            case 'xoadonhangchuagui':
                $madonhangcho = $_REQUEST['madonhangcho'];

                $chitiethanghoa = new chitiethanghoaclass();
                $chitiethanghoa->XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho);

                $donhang = new donhangchoclass();
                $donhang->XoaDonHangCho($madonhangcho);

                header("Location: ../index.php?page=donhangcho&kq=daxoadonhangcho");
                
                break;
            case 'huydonhangcho':
                $madonhangcho = $_REQUEST['madonhangcho'];

                $donhang = new donhangchoclass();
                $donhang->XoaDonHangCho($madonhangcho);

                $chitiethanghoa = new chitiethanghoaclass();
                $chitiethanghoa->XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho);
                
                header("Location: ../index.php?page=donhangcho&kq=daxoadonhangcho");
                break;

            case 'xoahanghoatrongdonhangcho':
                $madonhangcho = $_REQUEST['madonhangcho'];
                $macthh = $_REQUEST['macthh'];

                $loaibo = new donhangchoclass();
                $loaibo->XoaHangHoaTrongDonHangCho($macthh , $madonhangcho);

                header("Location: ../index.php?page=taodonhangcho&kq=daloaibohangkhoidonhangcho");

                break;

            case 'thaydoisoluonghang':
                $macthh = $_POST['macthh'];
                $madonhangcho = $_POST['madonhangcho'];
                $soluong = $_POST['soluong'];

                $suadoi = new donhangchoclass();
                $suadoi->SuaSoLuongHangHoaDonHangCho($soluong, $macthh, $madonhangcho);

                header("Location: ../index.php?page=taodonhangcho&kq=thaydoisoluongthanhcong");
                break;
            default:
                # code...
                break;
        }
    }
?>