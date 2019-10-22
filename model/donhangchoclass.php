<?php
    $str1 = 'database/ketnoidonhangcho.php';
    $str2 = '../database/ketnoidonhangcho.php';
    $str3 = '../../../database/ketnoidonhangcho.php';
    $str4 = '../../../../database/ketnoidonhangcho.php';
    $str5 = '../../../../../database/ketnoidonhangcho.php';

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
  
    class donhangchoclass extends databaseDonHangCho{

        public function LayTatCaDonHangCho(){
            $donhangcho = $this->connect->prepare('SELECT * FROM donhangcho');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
            $donhangcho->execute();
            $listdonhangcho = $donhangcho->fetchAll();
            return $listdonhangcho;
        }

        # lay tat ca cac don hang cua khach hang da duoc duyet va hien thi
        public function LayTatCaDonHangChoCuaKhachHang($makhachhang){
            $donhangcho = $this->connect->prepare('SELECT dhc.*, dh.* FROM donhangcho dhc, donhang dh WHERE dh.madonhangcho = dhc.madonhangcho AND dhc.trangthai="daduyet" AND makhachhang = ? ORDER BY dh.ngaytao DESC');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        public function LayTatCaDonHangChoCuaKhachHangDaDuyet(){
            $donhangcho = $this->connect->prepare('SELECT dhc.*, dh.*, kh.*, dh.ngaytao AS ngayduyet FROM donhangcho dhc, donhang dh, khachhang kh WHERE dh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND dhc.trangthai = "daduyet" ORDER BY dh.ngaytao DESC');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array());
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # loc don hang theo ten va so dien thoai
        public function LayTatCaDonHangChoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai){
            $donhangcho = $this->connect->prepare("SELECT DISTINCT dhc.*, dh.*, kh.*, dh.ngaytao AS ngayduyet FROM donhangcho dhc, donhang dh, khachhang kh WHERE dh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND dhc.trangthai = 'daduyet' AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' ORDER BY dh.ngaytao DESC");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach,$sodienthoai));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # loc don hang theo ten, so dien thoai va ngay thang
        public function LayTatCaDonHangChoCuaKhachHangDaDuyetTheoSoDienThoai($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim){
            $donhangcho = $this->connect->prepare("SELECT DISTINCT dhc.*, dh.*, kh.*, dh.ngaytao AS ngayduyet FROM donhangcho dhc, donhang dh, khachhang kh WHERE dh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND dhc.trangthai = 'daduyet' AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' AND dh.ngaytao >= '$ngaybatdautim' AND dh.ngaytao <= '$ngayketthuctim' ORDER BY dh.ngaytao DESC");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach,$sodienthoai, $ngaybatdautim, $ngayketthuctim));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # tinh cong no theo ten va so dien thoai
        public function CongNoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai){
            $donhangcho = $this->connect->prepare("SELECT SUM(congno) AS tongcongno, COUNT(congno) AS soluong FROM donhangcho dhc, donhang dh, khachhang kh WHERE dh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND dhc.trangthai = 'daduyet' AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%'");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach, $sodienthoai));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # tinh cong no theo ten, so dien thoai va ngay thang
        public function CongNoCuaKhachHangDaDuyetTheoNgayThang($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim){
            $donhangcho = $this->connect->prepare("SELECT SUM(congno) AS tongcongno, COUNT(congno) AS soluong FROM donhangcho dhc, donhang dh, khachhang kh WHERE dh.madonhangcho = dhc.madonhangcho AND kh.makhachhang = dhc.makhachhang AND dhc.trangthai = 'daduyet' AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' AND dh.ngaytao >= '$ngaybatdautim' AND dh.ngaytao <= '$ngayketthuctim'");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # tong san pham theo ten va so dien thoai
        public function TongSanPhamTheoTen($tenkhach, $sodienthoai){
            $donhangcho = $this->connect->prepare("SELECT DISTINCT hh.tenhanghoa, SUM(cthh.soluong) AS soluong FROM donhangcho dhc, donhang dh, khachhang kh, chitiethanghoa cthh, hanghoa hh WHERE dh.madonhangcho = dhc.madonhangcho AND dhc.madonhangcho = cthh.madonhangcho AND cthh.mahanghoa = hh.mahanghoa AND kh.makhachhang = dhc.makhachhang AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' GROUP BY hh.tenhanghoa");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach, $sodienthoai));
			$list = $donhangcho->fetchAll(); 
            return $list;
        }

        # tong san pham theo ngay thang
        public function TongSanPhamTheoNgayThang($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim){
            $donhangcho = $this->connect->prepare("SELECT DISTINCT hh.tenhanghoa, SUM(cthh.soluong) AS soluong, dh.ngaytao AS daduyet FROM donhangcho dhc, donhang dh, khachhang kh, chitiethanghoa cthh, hanghoa hh WHERE dh.madonhangcho = dhc.madonhangcho AND dhc.madonhangcho = cthh.madonhangcho AND cthh.mahanghoa = hh.mahanghoa AND kh.makhachhang = dhc.makhachhang AND kh.hoten LIKE '%$tenkhach%' AND kh.sodienthoai LIKE '%$sodienthoai%' AND dh.ngaytao >= '$ngaybatdautim' AND dh.ngaytao <= '$ngayketthuctim' GROUP BY hh.tenhanghoa");
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim));
			$list = $donhangcho->fetchAll(); 
            return $list;
        }

        # tu ma khach hang lay duoc cac don hang cho da gui cua tai khoan do
        public function LayTatCaDonHangChoCuaKhachHangDaGui($makhachhang){
            $donhangcho = $this->connect->prepare('SELECT * FROM donhangcho WHERE makhachhang = ?');
            $donhangcho->setFetchMode(PDO::FETCH_OBJ);
			$donhangcho->execute(array($makhachhang));
			$list = $donhangcho->fetchAll(); 
			return $list;
        }

        # lay ten hang hoa va so luong cua mot don hang cho da gui
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

        # lay don hang cho dang tao hien tai cua 1 khach hang bang makhachhang
        # thuat toan la lay ma don hang cho lon nhat de tim
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