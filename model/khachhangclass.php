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
        
        #Kiểm tra đăng nhập
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

        #Kiểm tra tên tài khoản
        public function checkTenKhachHang($tentaikhoan){
            $check = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=? ");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($tentaikhoan));
            $count = count($check->fetchAll());
            return $count;
        }

        # Lấy tất cả tài khoản quản trị
        public function LayTatCaKhachHang(){
            $khachhang = $this->connect->prepare('SELECT * FROM khachhang');
            $khachhang->setFetchMode(PDO::FETCH_OBJ);
            $khachhang->execute();
            $listkhachhang = $khachhang->fetchAll();
            return $listkhachhang;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotkhachhang($makhachhang){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where makhachhang = ?");
			$khachhang->setFetchMode(PDO::FETCH_OBJ);
			$khachhang->execute(array($makhachhang));
			$list = $khachhang->fetch(); 
			return $list;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotKhachHangBangTen($tentaikhoan){
            $khachhang = $this->connect->prepare("SELECT * FROM khachhang Where tentaikhoan = ?");
            $khachhang->setFetchMode(PDO::FETCH_OBJ);
            $khachhang->execute(array($tentaikhoan));
            $list = $khachhang->fetch(); 
            return $list;
        }

        # Kiểm tra tài khoản có tồn tại không
        public function KiemTrakhachHang($tentaikhoan){
            $checkTK = $this->connect->prepare("SELECT * FROM khachhang WHERE tentaikhoan=?");
            $checkTK->setFetchMode(PDO::FETCH_OBJ);
            $checkTK->execute(array($tentaikhoan));
            $count = count($checkTK->fetchAll());
            return $count;
        }

        # Kiểm tra số điện thoại đã được sử dụng chưa
        public function KiemTraSoDienThoai($sodienthoai){
            $checkSDT = $this->connect->prepare("SELECT * FROM khachhang WHERE sodienthoai=?");
            $checkSDT->setFetchMode(PDO::FETCH_OBJ);
            $checkSDT->execute(array($sodienthoai));
            $count = count($checkSDT->fetchAll());
            return $count;
        }
        
        # Thêm tài khoản mới
        public function ThemKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao){
            $cauLenh = 'INSERT INTO khachhang (tentaikhoan, matkhau, hoten, diachi, sodienthoai, ngaytao) VALUES (?,?,?,?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao));
        }

        # Chỉnh sửa tài khoản
        public function SuaKhachHang($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao, $makhachhang){
            $cauLenh = 'UPDATE khachhang SET tentaikhoan = ?, matkhau = ?, hoten = ?, diachi = ?, sodienthoai = ?, ngaytao = ? WHERE khachhang.makhachhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $ngaytao, $makhachhang));
        }

        # Xóa tài khoản
        public function XoaKhachHang($makhachhang){
            $cauLenh = 'DELETE FROM khachhang WHERE khachhang.makhachhang = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($id));
        }
    }
?>