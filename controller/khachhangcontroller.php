<?php
    session_start();

    require "../model/khachhangclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            
            case 'them':
                $tentaikhoan = trim($_POST['tentaikhoan']);
                $matkhau = trim($_POST['matkhau']);
                $diachi = trim($_POST['diachi']);
                $hoten = trim($_POST['hoten']);
                $tructhuoc = trim($_POST['tructhuoc']);
                $capbac = trim($_POST['capbac']);
                $ngaytao = date("Y-m-d");

                $md5 = md5($matkhau, false);

                $khachhang = new khachhangclass();

                if(strlen($tentaikhoan) == 0 || strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($hoten) == 0 ||  strlen($tructhuoc) == 0 ||  strlen($capbac) == 0){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    if($tentaikhoan <10){
                        header("Location: ../index.php?page=quanlikhachhang&kq=sodienthoaikhonghople");
                    }else{
                        $khachhang->ThemKhachHang($tentaikhoan, $md5, $hoten, $diachi, $tentaikhoan, $tructhuoc, $capbac, $ngaytao);
                        header("Location: ../index.php?page=quanlikhachhang&kq=dathemkhachhang");
                    }
                   
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
                $matkhau = trim($_POST['matkhau']);
                $diachi = trim($_POST['diachi']);
                $sodienthoai = trim($_POST['sodienthoai']);
                $hoten = trim($_POST['hoten']);
                $tructhuoc = trim($_POST['tructhuoc']);
                $capbac = trim($_POST['capbac']);

                $makhachhang = $_POST['makhachhang'];

                $md5 = md5($matkhau, false);

                $khachhang = new khachhangclass();

                if(strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($sodienthoai) == 0 || strlen($hoten) == 0 || strlen($tructhuoc) == 0 || strlen($capbac) == 0){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    $khachhang->SuaKhachHang($md5, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang);
                    header("Location: ../index.php?page=quanlikhachhang&kq=dasuakhachhang");
                }

                break;
            case 'khachhangthem':
                $tentaikhoan = trim($_POST['tentaikhoan']);
                $matkhau = trim($_POST['matkhau']);
                $matkhaunhaplai = trim($_POST['matkhaunhaplai']);
                $diachi = trim($_POST['diachi']);
                $hoten = trim($_POST['hoten']);
                $tructhuoc = trim($_POST['tructhuoc']);
                $capbac = trim($_POST['capbac']);
                $ngaytao = date("Y-m-d");

                $md5 = md5($matkhau, false);
              
                if(strlen($tentaikhoan) <= 0 || strlen($matkhau) <= 0 || strlen($matkhaunhaplai) <= 0 || strlen($diachi) <= 0 || strlen($hoten) <= 0 || strlen($tructhuoc) <=0 || strlen($capbac) <= 0){
                    header("Location: ../index.php?page=dangki&kq=thongtinrong");
                }else{
                    /*
                        - Kiem tra trung tai khoan
                        - Kiem tra mat mat
                        - Do dai mat khau
                        - Kiem tra so dien thoai
                    */

                    $khachhang = new khachhangclass();
                    $tentaikhoankhachhang = $khachhang->checkTenKhachHang($tentaikhoan);

                    if($tentaikhoankhachhang >= 1){
                        header("Location: ../index.php?page=dangki&kq=tentaikhoantontai");
                    }else if(strlen($tentaikhoan) <= 4){
                        header("Location: ../index.php?page=dangki&kq=tentaikhoanngan");
                    }else if($matkhau != $matkhaunhaplai){
                        header("Location: ../index.php?page=dangki&kq=matkhaukhongkhop");
                   }else if(strlen($matkhau) <= 5){
                        header("Location: ../index.php?page=dangki&kq=matkhauyeu");
                   }else{
                       $taikhoan = new khachhangclass();
                       $taikhoan->ThemKhachHang($tentaikhoan, $md5, $hoten, $diachi, $tentaikhoan, $tructhuoc, $capbac, $ngaytao);
                       header("Location: ../index.php?kq=dangkithanhcong&tentaikhoan=$tentaikhoan");
                   }

                }
                break;
            case 'khachhangsua':
                if(isset($_POST['hoten']) && isset($_POST['sodienthoai']) && isset($_POST['diachi'])){
                    $hoten = trim($_POST['hoten']);
                    $sodienthoai = trim($_POST['sodienthoai']);
                    $diachi = trim($_POST['diachi']);
                    $makhachhang =  trim($_POST['makhachhang']);
    
                    if(strlen($hoten) <= 0 || strlen($sodienthoai) <= 0 || strlen($diachi) <= 0 || strlen($makhachhang) <= 0){
                        header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                    }else{
                        $khachhang = new khachhangclass();  
                        $dienthoai = $khachhang->KiemTraSoDienThoai($sodienthoai);

                        $thongtin = $khachhang->LayMotkhachhangBangSoDienThoai($sodienthoai,$makhachhang);
                        $somacdinh = $thongtin->sodienthoai;

                        if($somacdinh == $sodienthoai){
                            $khachhang->KhachHangSuaThongTin($hoten, $diachi, $sodienthoai, $makhachhang);
                            header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                        }else{
                             if($dienthoai >= 1){
                                header("Location: ../index.php?page=trangcanhan&kq=sodienthoaitontai");
                            }else {
                                $khachhang->KhachHangSuaThongTin($hoten, $diachi, $sodienthoai, $makhachhang);
                                header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                            }
                        }
                    }
                }else{
                    header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                }
                break;
            case 'thaymatkhau':
                if(isset($_POST['matkhaucu']) && isset($_POST['matkhau']) && isset($_POST['matkhaunhaplai']) && isset($_POST['makhachhang'])){
                    $matkhaucu = trim($_POST['matkhaucu']);
                    $matkhau = trim($_POST['matkhau']);
                    $matkhaunhaplai = trim($_POST['matkhaunhaplai']);

                    $makhachhang = $_POST['makhachhang'];

                    $md5 = md5($matkhaucu, false);
                   
                    if(strlen($matkhaucu) <= 0 || strlen($matkhau) <= 0 || strlen($matkhaunhaplai) <= 0){
                        header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                    }else{
                        $khachhang = new khachhangclass();  
                        $thongtin = $khachhang->checkMatKhauDoiMatKhauMoi($makhachhang, $md5);

                        // mat khau cu sai
                        if($thongtin == 0){
                            header("Location: ../index.php?page=trangcanhan&kq=saimatkhaucu");
                        }else if($thongtin == 1){
                            if($matkhau != $matkhaunhaplai){
                                header("Location: ../index.php?page=trangcanhan&kq=matkhaukhongkhop");
                            }else if(strlen($matkhau) < 5){
                                header("Location: ../index.php?page=trangcanhan&kq=matkhauyeu");
                            }else{
                                $md5doi = md5($matkhau, false);
                                $khachhang->KhachHangSuaMatKhau($md5doi, $makhachhang);
                                header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                            }
                        }
                       
                    }
                }else{
                    header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                }
                break;
            default:
                # code...
                break;
        }
    }
?>