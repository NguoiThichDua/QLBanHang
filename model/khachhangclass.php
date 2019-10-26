<?php
    $str1 = 'database/ketnoikhachhang.php';
    $str2 = '../database/ketnoikhachhang.php';
    $str3 = '../../../database/ketnoikhachhang.php';
    $str4 = '../../../../database/ketnoikhachhang.php';
    $str5 = '../../../../../database/ketnoikhachhang.php';


    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else if(file_exists($str3)){
        $file = $str3;
    }else if(file_exists($str4)){
        $file = $str4;
    }else{
        $file = $str5;
    }

    require $file;
  
    class khachhangclass extends databaseKhachHang{
        
        # Kiem tra dang nhap cho khach hang tra ve SESSION
        public function checkDangNhap($tentaikhoan, $matkhau){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=? AND matkhau=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check->execute(array($tentaikhoan, $matkhau));
            $list = $check->fetch();
            
            if($list != NULL){
                return $list->kieukhachhang;
            }
            else{
                return NULL;
                }
            }

        # Kiem tra ten tai khoan da ton tai chua
        public function checkTenKhachHang($tenkhachhang){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($tenkhachhang));
            $count = count($check->fetchAll());
            return $count;
        }

        public function LayMotkhachhangBangTenTaiKhoan($tentaikhoan){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=?");
			$khachhang->setFetchMode(PDO::FETCH_OBJ);
			$khachhang->execute(array($tentaikhoan));
			$list = $khachhang->fetch(); 
			return $list;
        }

        # kiem tra mat khau cu cua tai khoan co trung khong
        public function checkMatKhauDoiMatKhauMoi($makhachhang, $matkhau){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE makhachhang=? AND matkhau=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($makhachhang,$matkhau));
            $count = count($check->fetchAll());
            return $count;
        }

         # Kiem tra mat khau cu dung khong
         public function checkMatKhauCu($makhachhang){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE makhachhang=? ");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($makhachhang));
            $count = count($check->fetchAll());
            return $count;
        }

        # Lay tat ca tai khoan khach hang - da check
        public function LayTatCaKhachHang(){
            $khachhang = $this->connect->prepare('SELECT * FROM khachhang');
            $khachhang->setFetchMode(PDO::FETCH_OBJ);
            $khachhang->execute();
            $listkhachhang = $khachhang->fetchAll();
            return $listkhachhang;
        }

        # Lay thong tin cua 1 khach hang bang ma khach hang - da check
        public function LayMotkhachhang($makhachhang){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where makhachhang = ?");
			$khachhang->setFetchMode(PDO::FETCH_OBJ);
			$khachhang->execute(array($makhachhang));
			$list = $khachhang->fetch(); 
			return $list;
        }

         # Lay thong tin cua 1 khach hang bang so dien thoai
         public function LayMotkhachhangBangSoDienThoai($sodienthoai, $makhachhang){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where sodienthoai = ? AND khachhang.makhachhang = ?");
			$khachhang->setFetchMode(PDO::FETCH_OBJ);
			$khachhang->execute(array($sodienthoai, $makhachhang));
			$list = $khachhang->fetch(); 
			return $list;
        }

        # Lay thong tin cua 1 khach hang bang ten tai khoan (khi dang nhap thanh cong thi tai khoan dang nhap duoc gan session bang tentaikhoan, dua vao ten tai khoan nay de dieu huong) - da check
        public function LayMotKhachHangBangTen($tentaikhoan){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where tentaikhoan = ?");
            $khachhang->setFetchMode(PDO::FETCH_OBJ);
            $khachhang->execute(array($tentaikhoan));
            $list = $khachhang->fetch(); 
            return $list;
        }

        # Kiem tra so dien thoai da duoc su dung chua
        public function KiemTraSoDienThoai($sodienthoai){
            $checkSDT = $this->connect->prepare("SELECT * FROM khachhang WHERE sodienthoai=?");
            $checkSDT->setFetchMode(PDO::FETCH_OBJ);
            $checkSDT->execute(array($sodienthoai));
            $count = count($checkSDT->fetchAll());
            return $count;
        }

         # Them tai khoan khach hang moi
         public function AdminThemKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao){
            $cauLenh = 'INSERT INTO khachhang (tentaikhoan, matkhau, hoten, diachi, sodienthoai, ngaytao) VALUES (?,?,?,?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau,$hoten, $diachi,$sodienthoai, $ngaytao));
        }
        
        # Them tai khoan khach hang moi
        public function ThemKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $ngaytao){
            $cauLenh = 'INSERT INTO khachhang (tentaikhoan, matkhau, hoten, diachi, sodienthoai, tructhuoc, capbac, ngaytao) VALUES (?,?,?,?,?,?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $ngaytao));
        }

        # Chinh sua tai khoan khach hang co mat khau - da check
        public function SuaKhachHang($matkhau, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET matkhau = ?, hoten = ?, diachi = ?, sodienthoai = ?, tructhuoc = ?, capbac = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($matkhau, $hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang));
        }

        # sua tai khoan khach khong mat khau - da check
        public function SuaKhachHangKhongMatKhau($hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET hoten = ?, diachi = ?, sodienthoai = ?, tructhuoc = ?, capbac = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($hoten, $diachi, $sodienthoai, $tructhuoc, $capbac, $makhachhang));
        }

        # chuc nang danh cho khach hang muon sua thong tin tai khoan
        public function KhachHangSuaThongTin($hoten, $diachi, $tructhuoc, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET hoten = ?, diachi = ?, tructhuoc = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($hoten, $diachi, $tructhuoc, $makhachhang));
        }

         # chuc nang danh cho khach hang muon sua thong tin mat khau
        public function KhachHangSuaMatKhau($matkhau, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET matkhau = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($matkhau, $makhachhang));
        }
    
        # chuc nang danh cho admin => chuyen khach thanh nghi ban
        public function NghiBan($makhachhang){
            $cauLenh = 'UPDATE khachhang SET danghi= "đã nghĩ" WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($makhachhang));
        }

        # chuc nang danh cho admin => chuyen khach thanh con ban
        public function ConBan($makhachhang){
            $cauLenh = 'UPDATE khachhang SET danghi= "chưa nghĩ" WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($makhachhang));
        }

        # Xoa tai khoan khach hang
        public function XoaKhachHang($makhachhang){
            $cauLenh = 'DELETE FROM khachhang WHERE khachhang.makhachhang = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($makhachhang));
        }
    }
?>

