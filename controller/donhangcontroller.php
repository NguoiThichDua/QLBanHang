<?php
    session_start();

    require "../model/donhangclass.php";
    require "../model/chitiethanghoaclass.php";
    require "../model/hanghoaclass.php";

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            case 'xacnhandonhang':
                if (isset($_POST['madonhangcho']) || isset($_POST['solo_nsx']) || isset($_POST['mabill']) || isset($_POST['congno'])) {
                    $madonhangcho = trim($_POST['madonhangcho']);
                    $solo_nsx = trim($_POST['solo_nsx']);
                    $mabill = trim($_POST['mabill']);
                    $congno = trim($_POST['congno']);

                    $ngaytao = date("Y-m-d");
                    $numbers = array();

                    $hanghoa = new hanghoaclass();
                    $thongtinmahanghoa = $hanghoa->LayTatCaHangHoa();

                    $thongtin = new chitiethanghoaclass();
                    $thongtinsanphamdonhang = $thongtin->LayHangHoaCuaDonHangDangTao($madonhangcho);

                    $i = 0;
                    foreach ($thongtinmahanghoa as $ttmh) {
                        foreach ($thongtinsanphamdonhang as $tt) {
                           if($ttmh->mahanghoa == $tt->mahanghoa){
                                if(isset($_POST["$tt->mahanghoa"])){
                                    $tienhanghoa = $_POST[$tt->mahanghoa];

                                    $tong[$i++] = $tienhanghoa * $tt->soluong;
                                }else{
                                    echo "Không nhận được dữ liệu <br>" ;
                                }
                           }
                        }
                    }
                   
                    $thanhtien = 0;
                    
                    foreach ($tong as $value) {
                        $thanhtien += $value;
                    }

                    if(strlen($madonhangcho) <= 0 || strlen($solo_nsx) <= 0 || strlen($mabill) <= 0 || strlen($congno) <= 0 ){
                        header("Location: ../index.php?page=quanlidonhang&yc=duyetdonhang&kq=thatbai");
                    }else{
                        $donhang = new donhangclass();
                        $donhang->ThemDonHang($ngaytao, $solo_nsx, $mabill, $congno, $madonhangcho, $thanhtien);
                        header("Location: ../index.php?page=quanlidonhang&yc=duyetdonhang&kq=thanhcong");
                    }
                }
                
            break;
            case 'suacongno':
                if(isset($_POST['madonhang']) && isset($_POST['congno'])){
                    $madonhang = $_POST['madonhang'];
                    $congno = $_POST['congno'];

                    $donhang = new donhangclass();
                    $donhang->SuaCongNoDonHang($congno, $madonhang);
                    header("Location: ../index.php?page=quanlidonhang&yc=daduyet&kq=thaydoithanhcong");
                }else{
                    header("Location: ../index.php?page=quanlidonhang&yc=daduyet&kq=thongtinrong");
                }
                break;
            default:
                # code...
                break;
        }
    }
?>