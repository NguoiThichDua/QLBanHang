<?php 
    require "model/hanghoaclass.php";
    require "model/chitiethanghoaclass.php";
    require "model/donhangchoclass.php";
?>
<div class="row">
    <!-- FORM THEM HANG HOA VA SO LUONG -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "taomoidonhang/themhanghoavasoluong.php"; ?>
    </div>
    
    <!-- BANG HANG HOA VA SO LUONG KHI THEM VAO DON HANG -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "taomoidonhang/banghanghoavasoluong.php"; ?>
    </div>

    <!-- FORM GHI CHU VA XAC NHAN GUI -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "taomoidonhang/ghichuvaxacnhangui.php"; ?>
    </div>
</div>
