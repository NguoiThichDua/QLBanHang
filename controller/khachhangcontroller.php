<?php
    session_start();

    require "../model/khachhangclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'them':
            # kiem tra cac truong du lieu bat buoc co truyen qua du hay khong
            if(isset($_POST['tentaikhoan']) && isset($_POST['matkhau']) && isset($_POST['diachi']) &&  isset($_POST['hoten']) && isset($_POST['tructhuoc']) && isset($_POST['capbac'])){
                $tentaikhoan = trim($_POST['tentaikhoan']);
                $matkhau = trim($_POST['matkhau']);
                $diachi = trim($_POST['diachi']);
                $hoten = trim($_POST['hoten']);
                $tructhuoc = trim($_POST['tructhuoc']);
                $capbac = trim($_POST['capbac']);

                # kiem tra co bi rong hay khong
                if(strlen($tentaikhoan) == 0 || strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($hoten) == 0 ||  strlen($tructhuoc) == 0 ||  strlen($capbac) == 0){
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }else{
                    # ten tai khoan (sodienthoai co hop le khong)
                    if($tentaikhoan <10){
                        header("Location: ../index.php?page=quanlikhachhang&kq=sodienthoaikhonghople");
                    }else{
                        # ngay tao va ma hoa mat khau
                        $ngaytao = date("Y-m-d");
                        $md5 = md5($matkhau, false);
                        # tien hanh tao moi
                        $khachhang = new khachhangclass();
                        $khachhang->ThemKhachHang($tentaikhoan, $md5, $hoten, $diachi, $tentaikhoan, $tructhuoc, $capbac, $ngaytao);
                        header("Location: ../index.php?page=quanlikhachhang&kq=dathemkhachhang");
                    }
                   
                }
            }else{
                header("Location: ../index.php?page=dangki&kq=thongtinrong");
            }
            break;
            case 'xoa':
                # co tim thay makhachhang duoc truyen qua hay khong
                if(isset($_POST['makhachhang'])){
                    $makhachhang = $_POST['makhachhang'];

                    # makhachhang bang NULL
                    if($makhachhang == ""){
                        header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                    }else{
                        # tien hanh xoa
                        $khachhang = new khachhangclass();
                        $khachhang->XoaKhachHang($makhachhang);
                        header("Location: ../index.php?page=quanlikhachhang&kq=daxoakhachhang");
                    }
                }else{
                    # khong truyen duoc makhachhang qua
                    header("Location: ../index.php?page=dangki&kq=thongtinrong");
                }
                break;
            case 'nghiban':
                # tim ma khach hang de chuyen trang thai thanh nghi ban
                if(isset($_REQUEST['makhachang'])){
                    $makhachhang = $_REQUEST['makhachang'];
                    $khachhang = new khachhangclass();
                    $khachhang->NghiBan($makhachhang);
                    header("Location: ../index.php?page=quanlikhachhang");
                }else{
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }
                break;
            case 'conban':
                 # tim ma khach hang de chuyen trang thai thanh con ban
                if(isset($_REQUEST['makhachang'])){
                    $makhachhang = $_REQUEST['makhachang'];
                    $khachhang = new khachhangclass();
                    $khachhang->ConBan($makhachhang);
                    header("Location: ../index.php?page=quanlikhachhang");
                }else{
                    header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                }
                break;
            case 'sua':
                # kiem tra cac truong du lieu co duoc POST qua du hay khong
                if(isset($_POST['matkhau']) && isset($_POST['diachi']) &&  isset($_POST['hoten']) && isset($_POST['sodienthoai']) && isset($_POST['tructhuoc']) && isset($_POST['capbac']) && isset($_POST['makhachhang'])){
                    $matkhau = trim($_POST['matkhau']);
                    $diachi = trim($_POST['diachi']);
                    $sodienthoai = trim($_POST['sodienthoai']);
                    $hoten = trim($_POST['hoten']);
                    $tructhuoc = trim($_POST['tructhuoc']);
                    $capbac = trim($_POST['capbac']);
                    $makhachhang = $_POST['makhachhang'];

                    # kiem tra rong cua cac truong du lieu
                    if(strlen($matkhau) == 0 || strlen($diachi) == 0 || strlen($sodienthoai) == 0 || strlen($hoten) == 0 || strlen($tructhuoc) == 0 || strlen($capbac) == 0){
                        header("Location: ../index.php?page=quanlikhachhang&kq=dulieurong");
                    }else{
                        # ma hoa mat khau
                        $md5 = md5($matkhau, false);

                        # tien hanh thay doi
                        $khachhang = new khachhangclass();
                        $khachhang->SuaKhachHang($md5, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang);
                        header("Location: ../index.php?page=quanlikhachhang&kq=dasuakhachhang");
                    }
                }else{
                    # khong truyen duoc makhachhang qua
                    header("Location: ../index.php?page=dangki&kq=thongtinrong");
                }

                break;
            case 'khachhangthem':
                # kiem tra du lieu bat buoc truyen vao co du hay khong
                if(isset($_POST['tentaikhoan']) && isset($_POST['matkhau']) && isset($_POST['matkhaunhaplai']) && isset($_POST['diachi']) &&  isset($_POST['hoten']) && isset($_POST['tructhuoc']) && isset($_POST['capbac'])){
                    $tentaikhoan = trim($_POST['tentaikhoan']);
                    $matkhau = trim($_POST['matkhau']);
                    $matkhaunhaplai = trim($_POST['matkhaunhaplai']);
                    $diachi = trim($_POST['diachi']);
                    $hoten = trim($_POST['hoten']);
                    $tructhuoc = trim($_POST['tructhuoc']);
                    $capbac = trim($_POST['capbac']);
                  
                    # du lieu nhan duoc co rong hay khong
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
    
                        # tai khoan da ton tais
                        if($tentaikhoankhachhang >= 1){
                            header("Location: ../index.php?page=dangki&kq=tentaikhoantontai");
                        }else if(strlen($tentaikhoan) < 10){
                            header("Location: ../index.php?page=dangki&kq=tentaikhoanngan");
                        }else if(strlen($matkhau) <= 5){
                            header("Location: ../index.php?page=dangki&kq=matkhauyeu");
                        }else if($matkhau != $matkhaunhaplai){
                            header("Location: ../index.php?page=dangki&kq=matkhaukhongkhop");
                       }else{
                           
                            # ngay tao va ma hoa mat khau
                            $ngaytao = date("Y-m-d");
                            $md5 = md5($matkhau, false);
                            # khi thoa man cac dieu kien tien hanh tao moi
                            $taikhoan = new khachhangclass();
                            $taikhoan->ThemKhachHang($tentaikhoan, $md5, $hoten, $diachi, $tentaikhoan, $tructhuoc, $capbac, $ngaytao);
                            header("Location: ../index.php?kq=dangkithanhcong&tentaikhoan=$tentaikhoan");
                       }
                    }
                # thieu du lieu nhan vao de dang ki
                }else{
                    header("Location: ../index.php?page=dangki&kq=thongtinrong");
                }
                break;
            case 'khachhangsua':
                # kiem tra du lieu bat buoc truyen vao co du hay khong
                if(isset($_POST['hoten']) && isset($_POST['sodienthoai']) && isset($_POST['diachi']) && isset($_POST['makhachhang'])){
                    $hoten = trim($_POST['hoten']);
                    $sodienthoai = trim($_POST['sodienthoai']);
                    $diachi = trim($_POST['diachi']);
                    $makhachhang =  trim($_POST['makhachhang']);
    
                    # kiem tra rong cua cac truong du lieu
                    if(strlen($hoten) <= 0 || strlen($sodienthoai) <= 0 || strlen($diachi) <= 0 || strlen($makhachhang) <= 0){
                        header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                    }else{
                        $khachhang = new khachhangclass();
                        # kiem tra so dien thoai da duoc su dung hay chua
                        $dienthoai = $khachhang->KiemTraSoDienThoai($sodienthoai);

                        # lay so dien thoai hien tai cua tai khoan de kiem tra voi sdt moi duoc POST quas
                        $thongtin = $khachhang->LayMotkhachhangBangSoDienThoai($sodienthoai,$makhachhang);
                        $somacdinh = $thongtin->sodienthoai;

                        # so dien thoai moi bang so dien thoai cu => thanh cong
                        if($somacdinh == $sodienthoai){
                            $khachhang->KhachHangSuaThongTin($hoten, $diachi, $sodienthoai, $makhachhang);
                            header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                        }else{
                            # so dien thoai moi da co nguoi su khac dung
                             if($dienthoai >= 1){
                                header("Location: ../index.php?page=trangcanhan&kq=sodienthoaitontai");
                            }else {
                                # so dien thoai chua ai su dung
                                $khachhang->KhachHangSuaThongTin($hoten, $diachi, $sodienthoai, $makhachhang);
                                header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                            }
                        }
                    }
                # khong nhan day du cac thong tin can thiet
                }else{
                    header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                }
                break;
            case 'thaymatkhau':
                # kiem tra cac truong du lieu can thiet da nhan du hay chua
                if(isset($_POST['matkhaucu']) && isset($_POST['matkhau']) && isset($_POST['matkhaunhaplai']) && isset($_POST['makhachhang'])){
                    $matkhaucu = trim($_POST['matkhaucu']);
                    $matkhau = trim($_POST['matkhau']);
                    $matkhaunhaplai = trim($_POST['matkhaunhaplai']);
                    $makhachhang = $_POST['makhachhang'];

                    $md5 = md5($matkhaucu, false);
                   
                    # kiem tra cac truong thong tin rong
                    if(strlen($matkhaucu) <= 0 || strlen($matkhau) <= 0 || strlen($matkhaunhaplai) <= 0){
                        header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                    }else{
                        $khachhang = new khachhangclass();  
                        # kiem tra mat khau cu cua tai khoan co trung khong
                        $thongtin = $khachhang->checkMatKhauDoiMatKhauMoi($makhachhang, $md5);

                        # mat khau cu nhap ko dung
                        if($thongtin == 0){
                            header("Location: ../index.php?page=trangcanhan&kq=saimatkhaucu");
                        # dung mat khau cu => kiem tra mat khau moi
                        }else if($thongtin == 1){
                            # mat khau moi khong trung
                            if($matkhau != $matkhaunhaplai){
                                header("Location: ../index.php?page=trangcanhan&kq=matkhaukhongkhop");
                            # kiem tra do dai mat khau moi
                            }else if(strlen($matkhau) <= 5){
                                header("Location: ../index.php?page=trangcanhan&kq=matkhauyeu");
                            }else{
                                # tien hanh thay doi mat khau bang mat khau moi duoc POST qua
                                $md5doi = md5($matkhau, false);
                                $khachhang->KhachHangSuaMatKhau($md5doi, $makhachhang);
                                header("Location: ../index.php?page=trangcanhan&kq=thaydoithanhcong");
                            }
                        }
                    }
                # khong nhan du du lieu duoc truyen quas
                }else{
                    header("Location: ../index.php?page=trangcanhan&kq=dulieurong");
                }
                break;
            default:
                # code...
                break;
        }
    }else{

    }
?>