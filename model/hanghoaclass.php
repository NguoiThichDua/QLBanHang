<?php
    $str1 = 'database/ketnoihanghoa.php';
    $str2 = '../database/ketnoihanghoa.php';
    $str3 = '../../../database/ketnoihanghoa.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class hanghoaclass extends databaseHangHoa{

        public function LayTatCaHangHoa(){
            $hanghoa = $this->connect->prepare('SELECT * FROM hanghoa');
            $hanghoa->setFetchMode(PDO::FETCH_OBJ);
            $hanghoa->execute();
            $listhanghoa = $hanghoa->fetchAll();
            return $listhanghoa;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotHangHoa($mahanghoa){
            $admin = $this->connect->prepare("SELECT * FROM hanghoa Where mahanghoa = ?");
			$admin->setFetchMode(PDO::FETCH_OBJ);
			$admin->execute(array($mahanghoa));
			$list = $admin->fetch(); 
			return $list;
        }
        
        # Thêm tài khoản mới
        public function ThemHangHoa($tenhanghoa, $gia){
            $cauLenh = 'INSERT INTO hanghoa (tenhanghoa, gia) VALUES (?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tenhanghoa, $gia));
        }

        # Chỉnh sửa tài khoản
        public function SuaHangHoa($tenhanghoa, $gia, $mahanghoa){
            $cauLenh = 'UPDATE hanghoa SET tenhanghoa = ? , gia = ? WHERE hanghoa.mahanghoa = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tenhanghoa, $gia, $mahanghoa));
        }

        # Xóa tài khoản
        public function XoaHangHoa($mahanghoa){
            $cauLenh = 'DELETE FROM hanghoa WHERE hanghoa.mahanghoa = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($mahanghoa));
        }
    }
?>