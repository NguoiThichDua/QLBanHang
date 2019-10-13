<?php
    $str1 = 'database/ketnoitaikhoan.php';
    $str2 = '../database/ketnoitaikhoan.php';
    $str3 = '../../../database/ketnoitaikhoan.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class taikhoanclass extends databaseTaiKhoan{
        
        #Kiểm tra đăng nhập
        public function checkDangNhap($tentaikhoan, $matkhau){
            $check = $this->connect->prepare("SELECT * FROM taikhoan WHERE tentaikhoan=? AND matkhau=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check->execute(array($tentaikhoan, $matkhau));
            $list = $check->fetch();
            
            if($list != NULL){
                return $list->kieutaikhoan;
            }
            else{
                return NULL;
                }
            }

        #Kiểm tra tên tài khoản
        public function checktentaikhoan($tentaikhoan){
            $check = $this->connect->prepare("SELECT * FROM taikhoan WHERE tentaikhoan=? ");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($tentaikhoan));
            $count = count($check->fetchAll());
            return $count;
        }

        # Lấy tất cả tài khoản quản trị
        public function LayTatCaTaiKhoantaikhoan(){
            $taiKhoan = $this->connect->prepare('SELECT * FROM taikhoan');
            $taiKhoan->setFetchMode(PDO::FETCH_OBJ);
            $taiKhoan->execute();
            $listTaiKhoan = $taiKhoan->fetchAll();
            return $listTaiKhoan;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotTaiKhoantaikhoan($id){
            $taiKhoan = $this->connect->prepare("SELECT * FROM taikhoan Where id = ?");
			$taiKhoan->setFetchMode(PDO::FETCH_OBJ);
			$taiKhoan->execute(array($id));
			$list = $taiKhoan->fetch(); 
			return $list;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotTaiKhoantaikhoantentaikhoan($tentaikhoan){
            $taiKhoan = $this->connect->prepare("SELECT * FROM taikhoan Where tentaikhoan = ?");
            $taiKhoan->setFetchMode(PDO::FETCH_OBJ);
            $taiKhoan->execute(array($tentaikhoan));
            $list = $taiKhoan->fetch(); 
            return $list;
        }

        # Kiểm tra tài khoản có tồn tại không
        public function KiemTraTaiKhoan($tentaikhoan){
            $checkTK = $this->connect->prepare("SELECT * FROM taikhoan WHERE tentaikhoan=?");
            $checkTK->setFetchMode(PDO::FETCH_OBJ);
            $checkTK->execute(array($tentaikhoan));
            $count = count($checkTK->fetchAll());
            return $count;
        }

        # Kiểm tra số điện thoại đã được sử dụng chưa
        public function KiemTrasodienthoai($sodienthoai){
            $checkSDT = $this->connect->prepare("SELECT * FROM taikhoan WHERE sodienthoai=?");
            $checkSDT->setFetchMode(PDO::FETCH_OBJ);
            $checkSDT->execute(array($sodienthoai));
            $count = count($checkSDT->fetchAll());
            return $count;
        }
        
        # Thêm tài khoản mới
        public function ThemTaiKhoantaikhoan($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $capbac, $congno, $ngaytao, $kieutaikhoan){
            $cauLenh = 'INSERT INTO taikhoan (tentaikhoan, matkhau, hoten, diachi, sodienthoai, capbac, congno, ngaytao, kieutaikhoan) VALUES (?????????);';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $capbac, $congno, $ngaytao, $kieutaikhoan));
        }

        # Chỉnh sửa tài khoản
        public function SuaTaiKhoantaikhoanByAdmin($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $capbac, $congno, $ngaytao, $kieutaikhoan, $id){
            $cauLenh = 'UPDATE taikhoan SET tentaikhoan = ?, matkhau = ?, hoten = ?, diachi = ?, sodienthoai = ?, capbac = ?, congno = ?, ngaytao = ?, kieutaikhoan = ? WHERE taikhoan.mataikhoan = ?;';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tentaikhoan, $matkhau, $hoten, $diachi, $sodienthoai, $capbac, $congno, $ngaytao, $kieutaikhoan, $id));
        }

        # Xóa tài khoản
        public function XoaTaiKhoantaikhoan($id){
            $cauLenh = 'DELETE FROM taikhoan WHERE taikhoan.id = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($id));
        }
    }
?>