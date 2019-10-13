<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
        if(isset($_SESSION['admin'])){
            require "view/component/include/navbar.php";
            switch ($page) {
                case 'quanli':
                    require "view/component/quanli/index.php";
                    break;
                case 'taodonhang':
                require "view/component/quanli/taodonhang.php";
                    break;
                case 'quanlinhanvien':
                require "view/component/quanli/quanlinhanvien.php";
                    break;
                case 'quanlikhachhang':
                require "view/component/quanli/quanlikhachhang.php";
                    break;
                case 'quanlidonhang':
                require "view/component/quanli/quanlidonhang.php";
                    break;
                default:
                    break;
            }
        }else{
            require "view/component/dangnhap/dangnhap.php";
        }

       
         
    }else{
        if(isset($_SESSION['admin'])){
            require "view/component/include/navbar.php";
            require "view/component/quanli/index.php";
        }else{
            require "view/component/dangnhap/dangnhap.php";
        }
       
    }
   
?>