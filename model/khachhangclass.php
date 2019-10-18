<?php
    $str1 = 'database/ketnoikhachhang.php';
    $str2 = '../database/ketnoikhachhang.php';
    $str3 = '../../../database/ketnoikhachhang.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class khachhangclass extends databaseKhachHang{
        
        # Kiem tra dang nhap cho khach hang
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
        public function checkTenKhachHang($tentaikhoan){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=? ");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($tentaikhoan));
            $count = count($check->fetchAll());
            return $count;
        }

        # Lay tat ca tai khoan khach hang
        public function LayTatCaKhachHang(){
            $khachhang = $this->connect->prepare('SELECT * FROM khachhang');
            $khachhang->setFetchMode(PDO::FETCH_OBJ);
            $khachhang->execute();
            $listkhachhang = $khachhang->fetchAll();
            return $listkhachhang;
        }

        # Lay thong tin cua 1 khach hang bang ma khach hang
        public function LayMotkhachhang($makhachhang){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where makhachhang = ?");
			$khachhang->setFetchMode(PDO::FETCH_OBJ);
			$khachhang->execute(array($makhachhang));
			$list = $khachhang->fetch(); 
			return $list;
        }

        # Lay thong tin cua 1 khach hang bang ten tai khoan (khi dang nhap thanh cong thi tai khoan dang nhap duoc gan session bang tentaikhoan, dua vao ten tai khoan nay de dieu huong)
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
        public function ThemKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao){
            $cauLenh = 'INSERT INTO khachhang (tentaikhoan, matkhau, hoten, diachi, sodienthoai, ngaytao) VALUES (?,?,?,?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao));
        }

        # Chinh sua tai khoan khach hang
        public function SuaKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET tentaikhoan = ?, matkhau = ?, hoten = ?, diachi = ?, sodienthoai = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $makhachhang));
        }

        # Xoa tai khoan khach hang
        public function XoaKhachHang($makhachhang){
            $cauLenh = 'DELETE FROM khachhang WHERE khachhang.makhachhang = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($makhachhang));
        }
    }
?>

