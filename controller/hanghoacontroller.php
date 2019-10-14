<?php
    session_start();

    require "../model/hanghoaclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            
            case 'them':
                $tenhanghoa = trim($_POST['tenhanghoa']);;
                $gia = $_POST['gia'];

                $hanghoa = new hanghoaclass();

                if(strlen($tenhanghoa) == 0){
                    header("Location: ../index.php?page=quanlihanghoa&kq=tenhangtrong");
                }else if($tenhanghoa == "" || $gia == null){
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }
                else{
                    $hanghoa->ThemHangHoa($tenhanghoa, $gia);
                    header("Location: ../index.php?page=quanlihanghoa&kq=dathemhang");
                }
            break;
            case 'xoa':
                $mahanghoa = $_POST['mahanghoa'];
                $hanghoa = new hanghoaclass();

                if($mahanghoa == ""){
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }else{
                    $hanghoa->XoaHangHoa($mahanghoa);
                    header("Location: ../index.php?page=quanlihanghoa&kq=daxoahang");
                }
                break;
            case 'sua':
                $mahanghoa = $_POST['mahanghoa'];
                $tenhanghoa = trim($_POST['tenhanghoa']);;
                $gia = $_POST['gia'];

                $hanghoa = new hanghoaclass();

                if(strlen($tenhanghoa) == 0){
                    header("Location: ../index.php?page=quanlihanghoa&kq=tenhangtrong");
                }else if($tenhanghoa == "" || $mahanghoa == "" || $gia == ""){
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }
                else{
                    $hanghoa->SuaHangHoa($tenhanghoa, $gia, $mahanghoa);
                    header("Location: ../index.php?page=quanlihanghoa&kq=dasuahang");
                }
                break;
            default:
                # code...
                break;
        }
    }
?>