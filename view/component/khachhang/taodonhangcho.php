<?php 
    require "model/hanghoaclass.php";
    require "model/chitiethanghoaclass.php";
    require "model/donhangchoclass.php";
?>
<div class="row">
    <!-- FORM THEM HANG HOA VA SO LUONG -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <?php require "taomoidonhang/themhanghoavasoluong.php"; ?>
    </div>
    <!-- FORM GHI CHU VA XAC NHAN GUI -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <?php require "taomoidonhang/ghichuvaxacnhangui.php"; ?>
    </div>
    <!-- BANG HANG HOA VA SO LUONG KHI THEM VAO DON HANG -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "taomoidonhang/banghanghoavasoluong.php"; ?>
    </div>
</div>

<div class="mt-3">
    <?php 
        # FORM HUY DON HANG CHO HIEN TAI
        require "taomoidonhang/huydonhangcho.php"; 

        # MODAL (THAY DOI SO LUONG HANG CUA DON HANG DA THEM)
        require "modal/modaldonhangcho.php"
    ?>
</div>
