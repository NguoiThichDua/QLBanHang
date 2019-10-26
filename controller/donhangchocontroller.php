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

            # nguoi dung them
            if (isset($_SESSION['khachhang'])) {
                $tentaikhoan = $_SESSION['khachhang'];

                # lay ma khach hang bang ten tai khoan dang dang nhap
                $nguoidung = new khachhangclass();
                $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                $makhachhang = $thongtin->makhachhang;

                # khong lay duoc makhachhang
                if($makhachhang == ""){
                    header("Location: ../index.php?page=quanli&kq=khonglayduocthontinkhachhang");
                }else{
                    $ngaytao = date("Y-m-d");
                    # xac nhan tao don hang cho moi voi ma khach
                    $donhangcho = new donhangchoclass();
                    $donhangcho->ThemDonHangCho($ngaytao, $makhachhang);
                    header("Location: ../index.php?page=taodonhangcho&kq=khoitaodonhangchothanhcong");
                }
            # admin them
            }else if(isset($_SESSION['admin'])){
                if(isset($_POST['makhachtaodonhang'])){
                    $makhachtaodonhang = $_POST['makhachtaodonhang'];

                    $khachhang = new khachhangclass();
                    $tentaikhoankhachhang = $khachhang->checkTenKhachHang($makhachtaodonhang);

                    $thongtin = $khachhang->LayMotkhachhangBangTenTaiKhoan($makhachtaodonhang);
                    $makhach = $thongtin->makhachhang;
        
                    # tai khoan da ton tais
                    if($tentaikhoankhachhang < 1){
                        header("Location: ../index.php?page=quanlidonhang&yc=taodonhangchokhach&kq=tentaikhoankhongtontai");
                    }else{
                        $ngaytao = date("Y-m-d");

                        $donhangcho = new donhangchoclass();
                        $donhangcho->ThemDonHangCho($ngaytao, $makhach);
                        header("Location: ../index.php?page=taodonhangcho&sodienthoai=$makhachtaodonhang");
                    }
                }
            }else{
                header("Location: ../index.php?page=quanlidonhang&yc=taodonhangchokhach&kq=khonglayduocthontinkhachhang");
            }
                
            break;
            case 'themhanghoachodonhangcho':
                # kiem tra ma hang va so luong co duoc POST qua hay khong
                if(isset($_POST['mahang']) && isset($_POST['soluong'])){
                    $mahanghoa = trim($_POST['mahang']);
                    $soluong = trim($_POST['soluong']);
    
                    # nguoi them la khach hang
                    if (isset($_SESSION['khachhang'])) {
                        $tentaikhoan = $_SESSION['khachhang'];
                        
                        # lay ma khach bang ten tai khoan
                        $nguoidung = new khachhangclass();
                        $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                        $makhachhang = $thongtin->makhachhang;
    
                        # lay thong tin don hang cho dang tao cua khach
                        $donhang = new donhangchoclass();
                        $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);
    
                        # lay ma don hang cho lon nhat
                        $madonhangcho = $thongtin->MAX;
    
                        # kiem tra rong
                        if($mahanghoa == "" || $soluong == ""){
                            header("Location: ../index.php?page=taodonhangcho&kq=dulieurong");
                        }else{
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
                        }
                        
                    }else if(isset($_SESSION['admin'])){
                        $mahanghoa = trim($_POST['mahang']);
                        $soluong = trim($_POST['soluong']);
        
                        if(isset($_POST['makhachtaodonhang'])){
                            $makhachtaodonhang = $_POST['makhachtaodonhang'];
        
                            $khachhang = new khachhangclass();
        
                            $thongtin = $khachhang->LayMotkhachhangBangTenTaiKhoan($makhachtaodonhang);
                            $makhach = $thongtin->makhachhang;
    
                            $donhang = new donhangchoclass();
                            $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhach);
        
                            $madonhangcho = $thongtin->MAX;
        
                            if($mahanghoa == "" || $soluong == ""){
                                header("Location: ../index.php?page=taodonhangcho&kq=dulieurong");
                            }else{
                                 # kiem tra hang hoa da them vao don hang cho chua (chua->them || roi->update so luong)
                                $checkhanghoa = new donhangchoclass();
                                $sosanpham = $checkhanghoa->KiemTraHangHoaCoTrongDonHangCho($madonhangcho, $mahanghoa);
        
                                if($sosanpham->soluong > 0){
                                    header("Location: ../index.php?page=taodonhangcho&sodienthoai=$makhachtaodonhang&kq=datontaimonhang");
                                }else{
                                    $chitiethanghoa = new chitiethanghoaclass();
                                    $chitiethanghoa->ThemChiTietHangHoa($mahanghoa, $soluong, $madonhangcho);
                                    header("Location: ../index.php?page=taodonhangcho&sodienthoai=$makhachtaodonhang&kq=dathemhang");
                                }
                            }
                        }else{
                            header("Location: ../index.php?page=taodonhangcho&kq=dulieurong");
                        }
                    }else{
                        header("Location: ../index.php?page=quanli&kq=khonglayduocthontinkhachhang");
                    }
                }else{
                    header("Location: ../index.php?page=taodonhangcho&kq=dulieurong");
                }
            break;
            case 'guichoadmin':

                if(isset($_SESSION['admin'])){
                    if(isset($_POST['makhachtaodonhang'])){
                        $makhachtaodonhang = $_POST['makhachtaodonhang'];

                        $nguoidung = new khachhangclass();
                        $thongtin = $nguoidung->LayMotKhachHangBangTen($makhachtaodonhang);
                        $makhachhang = $thongtin->makhachhang;
    
                        $donhang = new donhangchoclass();
                        $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);
    
                        $madonhangcho = $thongtin->MAX;
    
                        $gui = new donhangchoclass();
    
                        if(isset($_POST['ghichu'])){
                            $ghichu = $_POST['ghichu'];
                           
                            $gui->GuiDonHangChoAdmin($ghichu,$madonhangcho);
    
                            header("Location: ../index.php?page=quanlidonhang&kq=daguidonhangcho");
                        }else{
                            $gui->GuiDonHangChoAdmin("",$madonhangcho);
    
                            header("Location: ../index.php?page=quanlidonhang&kq=daguidonhangcho");
                        }
                    }else{
                        header("Location: ../index.php?page=quanlidonhang&kq=dulieurong");
                    }
                }else{
                    if(isset($_SESSION['khachhang'])){
                        $tentaikhoan = $_SESSION['khachhang'];
    
                        # lay ma khach hang bang ten tai khoan
                        $nguoidung = new khachhangclass();
                        $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                        $makhachhang = $thongtin->makhachhang;
    
                        # lay ma don hang cho moi nhat cua khach 
                        $donhang = new donhangchoclass();
                        $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);
    
                        $madonhangcho = $thongtin->MAX;
    
                        $gui = new donhangchoclass();
    
                        if(isset($_POST['ghichu'])){
                            $ghichu = $_POST['ghichu'];
                            $gui->GuiDonHangChoAdmin($ghichu,$madonhangcho);
    
                            header("Location: ../index.php?page=donhangcho&kq=daguidonhangcho");
                        }else{
                            $gui->GuiDonHangChoAdmin("",$madonhangcho);
    
                            header("Location: ../index.php?page=donhangcho&kq=daguidonhangcho");
                        }
                    }else{
                        header("Location: ../index.php?page=donhangcho&kq=dulieurong");
                    }
                }
                    
                break;
            case 'xoadonhangchuagui':
                $madonhangcho = $_REQUEST['madonhangcho'];

                $chitiethanghoa = new chitiethanghoaclass();
                $chitiethanghoa->XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho);

                $donhang = new donhangchoclass();
                $donhang->XoaDonHangCho($madonhangcho);

                header("Location: ../index.php?page=donhangcho&kq=daxoadonhangcho");
                
                break;

            case 'adminxoadonhangchuagui':
                $madonhangcho = $_REQUEST['madonhangcho'];

                $chitiethanghoa = new chitiethanghoaclass();
                $chitiethanghoa->XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho);

                $donhang = new donhangchoclass();
                $donhang->XoaDonHangCho($madonhangcho);

                header("Location: ../index.php?page=quanlidonhang&yc=duyetdonhang");
                break;
            case 'huydonhangcho':
                if(isset($_REQUEST['madonhangcho'])){
                    $madonhangcho = $_REQUEST['madonhangcho'];

                    # huy don hang cho
                    $donhang = new donhangchoclass();
                    $donhang->XoaDonHangCho($madonhangcho);
    
                    # huy cac mon hang trong don hang cho do
                    $chitiethanghoa = new chitiethanghoaclass();
                    $chitiethanghoa->XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho);
    
                    if(isset($_SESSION['admin'])){
                        header("Location: ../index.php?page=quanlidonhang&yc=daduyet&kq=daloaibohangkhoidonhangcho");
                    }else{
                        header("Location: ../index.php?page=donhangcho&kq=daxoadonhangcho");
                    }
                }else{
                    header("Location: ../index.php?page=donhangcho");
                }
               
                break;

            case 'xoahanghoatrongdonhangcho':
                $madonhangcho = $_REQUEST['madonhangcho'];
                $macthh = $_REQUEST['macthh'];

                $loaibo = new donhangchoclass();
                $loaibo->XoaHangHoaTrongDonHangCho($macthh , $madonhangcho);

                if(isset($_SESSION['admin'])){
                    $makhachtaodonhang = $_POST['makhachtaodonhang'];
                    header("Location: ../index.php?page=taodonhangcho&sodienthoai=$makhachtaodonhang&kq=daloaibohangkhoidonhangcho");
                }else{
                    header("Location: ../index.php?page=taodonhangcho&kq=daloaibohangkhoidonhangcho");
                }
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