<?php
    $this->connect = new PDO('mysql:host=localhost;dbname=QLBanHang;charset=utf8','root','');
    $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>