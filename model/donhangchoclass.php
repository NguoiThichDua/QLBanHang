<?php
    $str1 = 'database/ketnoidonhangcho.php';
    $str2 = '../database/ketnoidonhangcho.php';
    $str3 = '../../../database/ketnoidonhangcho.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class donhangchoclass extends databaseDonHangCho{

        public function LayTatCaDonHangCho(){
            $donhangcho = $this->connect->prepare('SELECT * FROM donhangcho');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
            $donhangcho->execute();
            $listdonhangcho = $donhangcho->fetchAll();
            return $listdonhangcho;
        }

        public function LayTatCaDonHangChoCuaKhachHang($makhachhang){
            $donhangcho = $this->connect->prepare('SELECT * FROM donhangcho WHERE makhachhang = ?');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        public function ChiTietMotDonHangDaGui($makhachhang ,$madonhang){
            $donhangcho = $this->connect->prepare('SELECT hh.tenhanghoa, cthh.soluong FROM chitiethanghoa cthh, donhangcho dhc, hanghoa hh, khachhang kh WHERE hh.mahanghoa = cthh.mahanghoa AND cthh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND kh.makhachhang = ? AND dhc.madonhang = ?');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang, $madonhang));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        public function LayMotDonHangCho($madonhangcho){
            $donhangcho = $this->connect->prepare("SELECT * FROM donhangcho Where madonhangcho = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($madonhangcho));
			$list = $donhangcho->fetch(); 
			return $list;
        }

        public function LayMotDonHangChoDuaVaoKhachHang($makhachhang){
            $donhangcho = $this->connect->prepare("SELECT MAX(dhc.madonhangcho) AS MAX FROM donhangcho dhc, khachhang kh WHERE kh.makhachhang = dhc.makhachhang AND kh.makhachhang = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang));
			$list = $donhangcho->fetch(); 
			return $list;
        }
        
        public function ThemDonHangCho($ngaytao, $makhachhang){
            $cauLenh = 'INSERT INTO donhangcho (ngaytao, makhachhang) VALUES (?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($ngaytao, $makhachhang));
        }

        public function GuiDonHangChoAdmin($madonhangcho){
            $cauLenh = 'UPDATE donhangcho SET trangthai = "dagui" WHERE donhangcho.madonhangcho = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($madonhangcho));
        }

        public function SuaDonHangCho($ngaytao, $makhachhang, $madonhangcho){
            $cauLenh = 'UPDATE donhangcho SET ngaytao = ? , makhachhang = ? WHERE donhangcho.madonhangcho = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($ngaytao, $makhachhang, $madonhangcho));
        }

        public function XoaDonHangCho($madonhangcho){
            $cauLenh = 'DELETE FROM donhangcho WHERE donhangcho.madonhangcho = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($madonhangcho));
        }
    }
?>