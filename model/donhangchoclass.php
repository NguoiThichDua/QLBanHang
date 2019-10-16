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
            $donhangcho = $this->connect->prepare('SELECT hh.tenhanghoa, cthh.soluong FROM chitiethanghoa cthh, donhangcho dhc, hanghoa hh, khachhang kh WHERE hh.mahanghoa = cthh.mahanghoa AND cthh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND kh.makhachhang = ? AND dhc.madonhangcho = ?');
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

        public function KiemTraHangHoaCoTrongDonHangCho($madonhangcho, $mahanghoa){
            $donhangcho = $this->connect->prepare("SELECT COUNT(cthh.mahanghoa) AS soluong FROM chitiethanghoa cthh, donhangcho dhc WHERE cthh.madonhangcho = dhc.madonhangcho AND dhc.madonhangcho = ? AND cthh.mahanghoa = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($madonhangcho,$mahanghoa));
			$list = $donhangcho->fetch(); 
			return $list;
        }

        public function AnTenHangDaChon($madonhangcho){
            $donhangcho = $this->connect->prepare("SELECT hh.tenhanghoa FROM donhangcho dhc, chitiethanghoa cthh, hanghoa hh WHERE dhc.madonhangcho = cthh.madonhangcho AND hh.mahanghoa = cthh.mahanghoa AND dhc.madonhangcho = ?");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($madonhangcho));
			$list = $donhangcho->fetchAll(); 
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

        public function GuiDonHangChoAdmin($ghichu, $madonhangcho){
            $cauLenh = 'UPDATE donhangcho SET trangthai = "dagui", ghichu = ? WHERE donhangcho.madonhangcho = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($ghichu,$madonhangcho));
        }

        public function SuaDonHangCho($ngaytao, $makhachhang, $madonhangcho){
            $cauLenh = 'UPDATE donhangcho SET ngaytao = ? , makhachhang = ? WHERE donhangcho.madonhangcho = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($ngaytao, $makhachhang, $madonhangcho));
        }

        public function SuaSoLuongHangHoaDonHangCho($soluong, $macthh, $madonhangcho){
            $cauLenh = 'UPDATE chitiethanghoa SET soluong = ? WHERE chitiethanghoa.macthh = ? AND chitiethanghoa.madonhangcho = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($soluong, $macthh, $madonhangcho));
        }


        public function XoaDonHangCho($madonhangcho){
            $cauLenh = 'DELETE FROM donhangcho WHERE donhangcho.madonhangcho = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($madonhangcho));
            
        }

        public function XoaHangHoaTrongDonHangCho($macthh , $madonhangcho){
            $cauLenh = ' DELETE FROM chitiethanghoa WHERE chitiethanghoa.macthh = ? AND chitiethanghoa.madonhangcho = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($macthh , $madonhangcho));
        }

       
    }
?>