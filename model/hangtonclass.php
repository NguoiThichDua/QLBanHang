<?php
    $str1 = 'database/ketnoihangton.php';
    $str2 = '../database/ketnoihangton.php';
    $str3 = '../../../database/ketnoihangton.php';
    $str4 = '../../../../database/ketnoihangton.php';
    $str5 = '../../../../../database/ketnoihangton.php';

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
  
    class hangtonclass extends databaseHangTon{

        # lay tat ca chi tiet hang ton
        public function TatCaHangTon(){
            $hangton = $this->connect->prepare("SELECT * FROM hangton");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array());
			$list = $hangton->fetchAll(); 
			return $list;
        }

        public function LayTatCahangton($makhach){
            $hangton = $this->connect->prepare("SELECT * FROM hangton WHERE makhachhang = ?");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($makhach));
			$list = $hangton->fetchAll(); 
			return $list;
        }

        public function LayHangTonTheoThang($makhach, $thang){
            $hangton = $this->connect->prepare("SELECT DISTINCT * FROM hangton WHERE makhachhang = ? AND MONTH(ngaytao) IN( SELECT MONTH(?))");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($makhach, $thang));
			$list = $hangton->fetchAll(); 
			return $list;
           
        }

        # lay tat ca chi tiet hang ton
        public function TatCaHangTonTheoTen($tenkhach){
            $hangton = $this->connect->prepare("SELECT * FROM hangton ht, khachhang kh WHERE ht.makhacHhang = kh.makhachhang AND kh.hoten LIKE '%$tenkhach%' ");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($tenkhach));
			$list = $hangton->fetchAll(); 
			return $list;
        }

        # lay tat ca chi tiet hang ton
        public function LayTatCaTheoMaKhach($tenkhach, $sodienthoai){
            $hangton = $this->connect->prepare("SELECT ht.*, kh.*, ht.ngaytao AS ngaydatao FROM hangton ht, khachhang kh WHERE ht.makhacHhang = kh.makhachhang AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%'  ORDER BY ht.ngaytao DESC");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($tenkhach, $sodienthoai));
			$list = $hangton->fetchAll(); 
			return $list;
        }

        public function LayDonHangTonCuaKhachTheoNgayThang($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim){
            $donhangcho = $this->connect->prepare("SELECT ht.*, kh.*, ht.ngaytao AS ngaydatao FROM hangton ht, khachhang kh WHERE ht.makhachhang = kh.makhachhang AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' AND ht.ngaytao >= '$ngaybatdautim' AND ht.ngaytao <= '$ngayketthuctim' ORDER BY ht.ngaytao DESC");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach,$sodienthoai, $ngaybatdautim, $ngayketthuctim));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        public function LayTatCaHangTonBangMaKhachHang($makhachhang, $mahangton){
            $hangton = $this->connect->prepare("SELECT * FROM hangton ht, chitiethangton ctht WHERE ctht.mahangton = ht.mahangton AND ht.makhachhang = ? AND ht.mahangton = ?");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($makhachhang, $mahangton));
			$list = $hangton->fetchAll(); 
			return $list;
        }

        public function LayMaxHangTon($makhachhang){
            $donhangcho = $this->connect->prepare("SELECT MAX(mahangton) AS donhangtonmoinhat FROM hangton WHERE makhachhang = ?");
			$donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang));
			$list = $donhangcho->fetch(); 
			return $list;
        }

        # lay 1 hang ton bang ma
        public function LayMothangton($mahangton){
            $hangton = $this->connect->prepare("SELECT * FROM hangton Where mahangton = ?");
			$hangton->setFetchMode(PDO::FETCH_OBJ);
			$hangton->execute(array($mahangton));
			$list = $hangton->fetch(); 
			return $list;
        }
        
        # them hang ton moi
        public function Themhangton($ngaytao, $makhachhang){
            $cauLenh = 'INSERT INTO hangton (ngaytao, makhachhang) VALUES (?,?)';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($ngaytao, $makhachhang));
        }

        # Chỉnh sửa tài khoản
        public function Suahangton($makhachhang, $mahangton){
            $cauLenh = 'UPDATE hangton SET  makhachhang = ? WHERE hangton.mahangton = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($makhachhang, $mahangton));
        }

        # Xóa tài khoản
        public function Xoahangton($mahangton){
            $cauLenh = 'DELETE FROM hangton WHERE hangton.mahangton = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($mahangton));
        }
    }
?>