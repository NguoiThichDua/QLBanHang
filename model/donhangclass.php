<?php
    $str1 = 'database/ketnoidonhang.php';
    $str2 = '../database/ketnoidonhang.php';
    $str3 = '../../../database/ketnoidonhang.php';
    $str3 = '../../../../database/ketnoidonhang.php';


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
  
    class donhangclass extends databaseDonHang{

        public function LayTatCaDonHang(){
            $DonHang = $this->connect->prepare('SELECT * FROM donhang');
            $DonHang->setFetchMode(PDO::FETCH_OBJ);
            $DonHang->execute();
            $listDonHang = $DonHang->fetchAll();
            return $listDonHang;
        }

        # Lay thong tin 1 don hang
        public function LayMotDonHang($madonhang){
            $donhang = $this->connect->prepare("SELECT * FROM donhang Where madonhang = ?");
			$donhang->setFetchMode(PDO::FETCH_OBJ);
			$donhang->execute(array($madonhang));
			$list = $donhang->fetch(); 
			return $list;
        }

         # Lay thong tin 1 don hang bang donhangcho
         public function LayDonHangBangMaDonHangCho($madonhangcho){
            $donhang = $this->connect->prepare("SELECT * FROM donhang Where madonhangcho = ?");
			$donhang->setFetchMode(PDO::FETCH_OBJ);
			$donhang->execute(array($madonhangcho));
			$list = $donhang->fetch(); 
			return $list;
        }
        
        # Them don hang moi
        public function ThemDonHang($ngaytao, $solo_nsx, $mabill, $congno, $madonhangcho, $thanhtien){
            $cauLenh = 'INSERT INTO donhang (ngaytao, solo_nsx, mabill, congno, madonhangcho, thanhtien) VALUES (?,?,?,?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($ngaytao, $solo_nsx, $mabill, $congno, $madonhangcho, $thanhtien));

            $cauLenh2 = 'UPDATE donhangcho SET trangthai = "daduyet" WHERE donhangcho.madonhangcho = ?';
            $suatrangthai = $this->connect->prepare($cauLenh2);
            $suatrangthai->execute(array($madonhangcho));   
        }

        # Chinh sua don hang
        public function SuaDonHang($solo_nsx, $mabill, $congno, $madonhang){
            $cauLenh = 'UPDATE donhang SET solo_nsx = ?, mabill = ?, congno = ? WHERE donhang.madonhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($solo_nsx, $mabill, $congno, $madonhang));
        }

         # Chinh sua cong no
         public function SuaCongNoDonHang($congno, $madonhang){
            $cauLenh = 'UPDATE donhang SET  congno = ? WHERE donhang.madonhang = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($congno, $madonhang));
        }

        # Xoa don hang
        public function XoaDonHang($madonhang){
            $cauLenh = 'DELETE FROM donhang WHERE donhang.madonhang = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($madonhang));
        }
    }
?>