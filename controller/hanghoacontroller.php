<?php
    session_start();

    require "../model/hanghoaclass.php";   

    if(isset($_GET["yc"])){
       
        $yeuCau = $_GET["yc"];

        switch ($yeuCau) {
            
            case 'them':
                if(isset($_POST['tenhanghoa'])){
                    $tenhanghoa = trim($_POST['tenhanghoa']);;
                    // $gia = $_POST['gia'];
    
                    $hanghoa = new hanghoaclass();
    
                    if(strlen($tenhanghoa) == 0){
                        header("Location: ../index.php?page=quanlihanghoa&kq=tenhangtrong");
                    }else{
                        $hanghoa->ThemHangHoa($tenhanghoa);
                        header("Location: ../index.php?page=quanlihanghoa&kq=dathemhang");
                    }
                }else{
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }
              
                break;
            case 'xoa':
                if(isset($_POST['mahanghoa'])){
                    $mahanghoa = $_POST['mahanghoa'];

                    $hanghoa = new hanghoaclass();
                    if($mahanghoa == "" || $mahanghoa == null){
                        header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                    }else{
                        $hanghoa->XoaHangHoa($mahanghoa);
                        header("Location: ../index.php?page=quanlihanghoa&kq=daxoahang");
                    }
                }else{
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }
              
                break;
            case 'sua':
                if(isset($_POST['mahanghoa']) && isset($_POST['tenhanghoa'])){
                    $mahanghoa = $_POST['mahanghoa'];
                    $tenhanghoa = trim($_POST['tenhanghoa']);
                    
                    $hanghoa = new hanghoaclass();
    
                    if(strlen($tenhanghoa) == 0){
                        header("Location: ../index.php?page=quanlihanghoa&kq=tenhangtrong");
                    }else if($tenhanghoa == "" || $mahanghoa == ""){
                        header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                    }
                    else{
                        $hanghoa->SuaHangHoa($tenhanghoa, $mahanghoa);
                        header("Location: ../index.php?page=quanlihanghoa&kq=dasuahang");
                    }
                }else{
                    header("Location: ../index.php?page=quanlihanghoa&kq=dulieurong");
                }
                break;
            default:
                # code...
                break;
        }
    }
?>