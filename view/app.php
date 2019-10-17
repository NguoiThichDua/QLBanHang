<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
        if(isset($_SESSION['admin'])){
            require "view/component/include/navbar.php";
            require "view/component/include/message.php";
            
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
                case 'quanlihanghoa':
                    require "view/component/quanli/quanlihanghoa.php";
                    break;
                default:
                    break;
            }
        }else if(isset($_SESSION['khachhang'])){
            require "view/component/include/navbar.php";
            require "view/component/include/message.php";

            switch ($page) {
                case 'donhangcho':
                    require "view/component/khachhang/donhangcho.php";
                    break;
                case 'taodonhangcho':
                    require "view/component/khachhang/taodonhangcho.php";
                    break;
                case 'quanli':
                require "view/component/khachhang/index.php";
                    break;
                    
                default:

                    break;
            }
        }else{

            switch ($page) {
                case 'dangki':
                    require "view/component/dangki/dangki.php";
                    break;
                
                default:
                    require "view/component/dangnhap/dangnhap.php";
                    break;
            }

            
        }

       
         
    }else{
        if(isset($_SESSION['admin']) || isset($_SESSION['khachhang'])){
            require "view/component/include/navbar.php";
            require "view/component/quanli/index.php";

        }else{
            require "view/component/dangnhap/dangnhap.php";
        }
       
    }
   
?>