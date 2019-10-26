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

        # lay tat ca cac hang hoa da them
        public function LayTatCaHangHoa(){
            $hanghoa = $this->connect->prepare('SELECT * FROM hanghoa');
            $hanghoa->setFetchMode(PDO::FETCH_OBJ);
            $hanghoa->execute();
            $listhanghoa = $hanghoa->fetchAll();
            return $listhanghoa;
        }

        # lay 1 mon hang bang ma hang
        public function LayMotHangHoa($mahanghoa){
            $admin = $this->connect->prepare("SELECT * FROM hanghoa Where mahanghoa = ?");
			$admin->setFetchMode(PDO::FETCH_OBJ);
			$admin->execute(array($mahanghoa));
			$list = $admin->fetch(); 
			return $list;
        }
        
        # them hang hoa moi
        public function ThemHangHoa($tenhanghoa){
            $cauLenh = 'INSERT INTO hanghoa (tenhanghoa) VALUES (?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tenhanghoa));
        }

        # chinh sua hang hoa
        public function SuaHangHoa($tenhanghoa, $mahanghoa){
            $cauLenh = 'UPDATE hanghoa SET tenhanghoa = ? WHERE hanghoa.mahanghoa = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tenhanghoa, $mahanghoa));
        }

        # xoa hang hoa
        public function XoaHangHoa($mahanghoa){
            $cauLenh = 'DELETE FROM hanghoa WHERE hanghoa.mahanghoa = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($mahanghoa));
        }
    }
?>