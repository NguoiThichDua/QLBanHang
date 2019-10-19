<?php
    if(isset($_REQUEST['yc'])){
        $yeucau = $_REQUEST['yc'];

        switch ($yeucau) {
            case 'duyetdonhang':
                require "duyetdonhang.php";
                break;
            case 'daduyet':
                require "daduyet.php";
                break; 
            default:
                echo "Yêu cầu không xác định";
                break;
        }
    }
?>