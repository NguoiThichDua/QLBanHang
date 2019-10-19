<?php
    session_start();

    require "../model/donhangclass.php";

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

                    if(strlen($madonhangcho) <= 0 || strlen($solo_nsx) <= 0 || strlen($mabill) <= 0 || strlen($congno) <= 0 ){
                        header("Location: ../index.php?page=quanlidonhang&yc=duyetdonhang&kq=thatbai");
                    }else{
                        $donhang = new donhangclass();
                        $donhang->ThemDonHang($ngaytao, $solo_nsx, $mabill, $congno, $madonhangcho);
                        header("Location: ../index.php?page=quanlidonhang&yc=duyetdonhang&kq=thanhcong");
                    }
                }
                
            break;

            default:
                # code...
                break;
        }
    }
?>