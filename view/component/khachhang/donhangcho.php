<!-- TRANG CHU DE XEM CAC DON HANG DA GUI -->

<?php 
    require "model/hanghoaclass.php"; 
    require "model/donhangchoclass.php"; 
?>
<!-- ROW -->
<div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="position-absolute" style="z-index: 999; left: 10px">       
            <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="index.php?page=quanli">TRANG CHỦ</a>
        </div>
        <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
    </div>

    <div class="col col-sm col-md col-lg col-xl"></div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
        <h4><strong class="">QUẢN LÍ ĐƠN HÀNG</strong></h4>    
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="dongytaodonhangcho">
        <!-- GOI MODAL XAC NHAN TAO DON HANG -->
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
            Tạo mới đơn hàng
        </button>
    </div>

    <!-- BANG DON HANG CHO DA GUI -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "donhangcho/bangdonhangcho.php"; ?>
    </div>
</div>  <!-- END ROW -->

<?php
    # modal xac nhan tao don hang cho
    require "modal/modalkhachhang.php";
?>