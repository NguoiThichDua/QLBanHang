<?php
    if(isset($_REQUEST['yc'])){
        $yeucau = $_REQUEST['yc'];

        switch ($yeucau) {
            case 'duyetdonhang':
                require "duyetdonhang/duyetdonhang.php";
                break;
            case 'xuatkho':
                require "xuatkho/xuatkho.php";
                break; 
            case 'taodonhangchokhach':
                require "taodonhangchokhach/menu.php";
                break;
            default:
                echo "Yêu cầu không xác định";
                break;
        }
    }else{
        require "duyetdonhang/duyetdonhang.php";
    }
?>