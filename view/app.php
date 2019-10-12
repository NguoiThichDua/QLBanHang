<?php
    if(isset($_GET['page'])){
        echo $_GET['page'];
    }else{
        require "view/component/dangnhap/dangnhap.php";
    }
   
?>