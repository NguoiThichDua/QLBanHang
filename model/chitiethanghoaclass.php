<?php
    $str1 = 'database/ketnoichitiethanghoa.php';
    $str2 = '../database/ketnoichitiethanghoa.php';
    $str3 = '../../../database/ketnoichitiethanghoa.php';
    $str4 = '../../../../database/ketnoichitiethanghoa.php';
    $str5 = '../../../../../database/ketnoichitiethanghoa.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else if(file_exists($str3)){
        $file = $str3;
    }else if(file_exists($str4)){
        $file = $str4;
    }else{
        $file = $str5;
    }
    require $file;
  
    class chitiethanghoaclass extends databaseChiTietKetNoiHangHoa{

        # lay hang hoa va so luong cua don hang cho bang madonhangcho
        public function LayHangHoaCuaDonHangDangTao($madonhangcho){
            $donhangcho = $this->connect->prepare("SELECT hh.mahanghoa, hh.tenhanghoa, cthh.soluong, cthh.macthh, cthh.madonhangcho FROM hanghoa hh, chitiethanghoa cthh, donhangcho dhc WHERE hh.mahanghoa = cthh.mahanghoa AND cthh.madonhangcho = dhc.madonhangcho AND dhc.madonhangcho = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($madonhangcho));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # them mot mon hang vao don hang - da check
        public function ThemChiTietHangHoa($mahanghoa, $soluong, $madonhangcho){
            $cauLenh = 'INSERT INTO chitiethanghoa (mahanghoa, soluong, madonhangcho) VALUES (?,?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($mahanghoa, $soluong, $madonhangcho));
        }

        # 
        public function SuaChiTietHangHoa($mahanghoa, $soluong, $madonhangcho, $macthh){
            $cauLenh = 'UPDATE chitiethanghoa SET mahanghoa = ?, soluong = ?, madonhangcho = ? WHERE chitiethanghoa.macthh = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($mahanghoa, $soluong, $madonhangcho, $macthh));
        }

        # Xoa chi tiet hang hoa cua don hang cho - da check
        public function XoaChiTietHangHoaDuaVaoDonHangCho($madonhangcho){
            $cauLenh = 'DELETE FROM chitiethanghoa WHERE chitiethanghoa.madonhangcho = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($madonhangcho));
        }
    }
?>