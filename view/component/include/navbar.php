<?php
    if(isset($_SESSION['admin'])){
        require "navbarchild/navbaradmin.php";
    }else if(isset($_SESSION['khachhang'])){
        require "navbarchild/navbarkhachhang.php";
    }else{
        echo "KHONG NHAN DUOC SESSION KHACH HANG OR ADMIN";
    }
?>