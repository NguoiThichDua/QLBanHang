<?php
    $str1 = 'database/ketnoichitiethanghoa.php';
    $str2 = '../database/ketnoichitiethanghoa.php';
    $str3 = '../../../database/ketnoichitiethanghoa.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class chitiethanghoaclass extends databaseChiTietKetNoiHangHoa{

        public function LayHangHoaCuaDonHangDangTao($madonhangcho){
            $donhangcho = $this->connect->prepare("SELECT hh.tenhanghoa, cthh.soluong, cthh.macthh, cthh.madonhangcho FROM hanghoa hh, chitiethanghoa cthh, donhangcho dhc WHERE hh.mahanghoa = cthh.mahanghoa AND cthh.madonhangcho = dhc.madonhangcho AND dhc.madonhangcho = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($madonhangcho));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        public function ThemChiTietHangHoa($mahanghoa, $soluong, $madonhangcho){
            $cauLenh = 'INSERT INTO chitiethanghoa (mahanghoa, soluong, madonhangcho) VALUES (?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($mahanghoa, $soluong, $madonhangcho));
        }

        # Chỉnh sửa tài khoản
        public function SuaChiTietHangHoa($mahanghoa, $soluong, $madonhangcho, $macthh){
            $cauLenh = 'UPDATE chitiethanghoa SET mahanghoa = ?, soluong = ?, madonhangcho = ? WHERE chitiethanghoa.macthh = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($mahanghoa, $soluong, $madonhangcho, $macthh));
        }

        # Xóa tài khoản
        public function XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho){
            $cauLenh = 'DELETE FROM chitiethanghoa WHERE chitiethanghoa.madonhangcho = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($madonhangcho));
        }
    }
?>