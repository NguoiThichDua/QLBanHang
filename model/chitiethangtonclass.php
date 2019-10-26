<?php
    $str1 = 'database/ketnoichitiethangton.php';
    $str2 = '../database/ketnoichitiethangton.php';
    $str3 = '../../../database/ketnoichitiethangton.php';
    $str4 = '../../../../database/ketnoichitiethangton.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else if(file_exists($str3)){
        $file = $str3;
    }else{
        $file = $str4;
    }
    require $file;
  
    class chitiethangtonclass extends databaseChiTietHangTon{

        # lay tat ca chi tiet hang ton
        public function LayTatCachitiethangton(){
            $chitiethangton = $this->connect->prepare('SELECT * FROM chitiethangton');
            $chitiethangton->setFetchMode(PDO::FETCH_OBJ);
            $chitiethangton->execute();
            $listchitiethangton = $chitiethangton->fetchAll();
            return $listchitiethangton;
        }

        # lay tat ca chi tiet hang ton - da check 
        public function LayTatCaChiTietHangTonBoiMaHangTon($mahangton){
            $chitiethangton = $this->connect->prepare("SELECT * FROM chitiethangton WHERE mahangton = ?");
			$chitiethangton->setFetchMode(PDO::FETCH_OBJ);
			$chitiethangton->execute(array($mahangton));
			$list = $chitiethangton->fetchAll(); 
			return $list;
        }

         # kiem tra ten hang da chon hay chua
         public function KiemTraHangHoaDaChon($tenhanghoa, $mahangton){
            $check = $this->connect->prepare("SELECT * FROM chitiethangton ctht, hangton ht WHERE ht.mahangton = ctht.mahangton AND ctht.tenhanghoa = ? AND ht.mahangton = ?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($tenhanghoa,$mahangton));
            $count = count($check->fetchAll());
            return $count;
        }

        # lay 1 hang ton bang ma
        public function LayMotchitiethangton($mactht){
            $chitiethangton = $this->connect->prepare("SELECT * FROM chitiethangton Where mactht = ?");
			$chitiethangton->setFetchMode(PDO::FETCH_OBJ);
			$chitiethangton->execute(array($mactht));
			$list = $chitiethangton->fetch(); 
			return $list;
        }
        
        # them hang ton moi - da check
        public function ThemChiTietHangTon($tenhanghoa, $soluong, $mahangton){
            $cauLenh = 'INSERT INTO chitiethangton (tenhanghoa, soluong, mahangton) VALUES (?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($tenhanghoa, $soluong, $mahangton));
        }

        # 
        public function SuaChiTietHangTon($tenhanghoa, $soluong, $mahangton, $mactht){
            $cauLenh = 'UPDATE chitiethangton SET tenhanghoa = ?, soluong = ?, mahangton =? WHERE chitiethangton.mactht = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($tenhanghoa, $soluong, $mahangton, $mactht));
        }

        # sua so luong hang ton trong chi tiet hang ton
        public function SuaSoLuongChiTietHangTon($soluong, $mahangton, $mactht){
            $cauLenh = 'UPDATE chitiethangton SET soluong = ? WHERE chitiethangton.mahangton = ? AND chitiethangton.mactht = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($soluong, $mahangton, $mactht));
        }

        # 
        public function XoaChiTietHangTonBoiMaHangTon($mahangton){
            $cauLenh = 'DELETE FROM chitiethangton WHERE chitiethangton.mahangton = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($mahangton));
        }

        # xoa hang ton trong chi tiet hang ton
        public function XoaChiTietHangTon($mahangton, $mactht){
            $cauLenh = 'DELETE FROM chitiethangton WHERE chitiethangton.mahangton = ? AND chitiethangton.mactht=?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($mahangton, $mactht));
        }
    }
?>