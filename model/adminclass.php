<?php
    $str1 = 'database/ketnoiadmin.php';
    $str2 = '../database/ketnoiadmin.php';
    $str3 = '../../../database/ketnoiadmin.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class adminclass extends databaseAdmin{
        
        #Kiểm tra đăng nhập
        public function checkDangNhap($tentaikhoan, $matkhau){
            $check = $this->connect->prepare("SELECT * FROM admin WHERE tentaikhoan=? AND matkhau=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check->execute(array($tentaikhoan, $matkhau));
            $list = $check->fetch();
            
            if($list != NULL){
                return $list->kieuadmin;
            }
            else{
                return NULL;
                }
            }

        # Lấy tất cả tài khoản quản trị
        public function LayTatCaAdmin(){
            $admin = $this->connect->prepare('SELECT * FROM admin');
            $admin->setFetchMode(PDO::FETCH_OBJ);
            $admin->execute();
            $listadmin = $admin->fetchAll();
            return $listadmin;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotAdmin($maadmin){
            $admin = $this->connect->prepare("SELECT * FROM admin Where maadmin = ?");
			$admin->setFetchMode(PDO::FETCH_OBJ);
			$admin->execute(array($maadmin));
			$list = $admin->fetch(); 
			return $list;
        }
        
        # Thêm tài khoản mới
        public function ThemKhachHang($tentaikhoan, $matkhau, $hoten){
            $cauLenh = 'INSERT INTO admin (tentaikhoan, matkhau, hoten) VALUES (?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau, $hoten));
        }

        # Chỉnh sửa tài khoản
        public function SuaKhachHang($tentaikhoan, $matkhau, $hoten, $maadmin){
            $cauLenh = 'UPDATE admin SET tentaikhoan = ?, matkhau = ?, hoten = ? WHERE admin.maadmin = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tentaikhoan, $matkhau, $hoten, $maadmin));
        }

        # Xóa tài khoản
        public function XoaAdmin($maadmin){
            $cauLenh = 'DELETE FROM admin WHERE admin.maadmin = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($maadmin));
        }
    }
?>