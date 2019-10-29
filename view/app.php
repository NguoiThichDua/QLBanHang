<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
        if(isset($_SESSION['admin'])){
            #require "view/component/include/navbar.php";
            ?>
                <div class="container">
            <?php
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
                    require "view/component/quanli/khachhang/quanlikhachhang.php";
                    break;
                case 'quanlidonhang':
                    require "view/component/quanli/donhangcuakhach/menuquanlidonhang.php";
                    break;
                case 'quanlihanghoa':
                    require "view/component/quanli/hanghoa/quanlihanghoa.php";
                    break;
                case 'taodonhangcho':
                    require "view/component/quanli/donhangcuakhach/taodonhangchokhach/taodonhangcho.php";
                    break;
                default:
                    break;
            ?>
                </div>
            <?php
            }
        }else if(isset($_SESSION['khachhang'])){
            #require "view/component/include/navbar.php";
            ?>
                <div class="container mt-5">
            <?php
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
                case 'trangcanhan':
                    require "view/component/khachhang/canhan/trangcanhan.php";
                    break;
                case 'quanlihangton':
                    require "view/component/khachhang/quanlihangton.php";
                    break; 
                case 'taodonhangtonmoi':
                    require "view/component/khachhang/taodonhangton/taodonhangton.php";
                    break; 
                default:

                    break;
                ?>
                    </div>
                <?php
            }
        }else{
            ?>
                <div class="container mt-5">
            <?php
            switch ($page) {
                case 'dangki':
                    require "view/component/dangki/dangki.php";
                    break;
                
                default:
                    require "view/component/dangnhap/dangnhap.php";
                    break;
            }
            ?>
                </div>
            <?php
        }
    }else{
        if(isset($_SESSION['admin']) || isset($_SESSION['khachhang'])){
            #require "view/component/include/navbar.php";
            ?>
                <div class="container mt-3">
            <?php
            require "view/component/quanli/index.php";
            ?>
                </div>
            <?php

        }else{
            ?>
                <div class="container mt-3">
            <?php
            require "view/component/dangnhap/dangnhap.php";
            ?>
                </div>
            <?php
        }
       
    }
   
?>