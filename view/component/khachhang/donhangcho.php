<!-- TRANG CHU DE XEM CAC DON HANG DA GUI -->

<?php 
    require "model/hanghoaclass.php"; 
    require "model/donhangchoclass.php"; 
?>
<!-- ROW -->
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <!-- TITLE -->
        <div class="card w-100">
            <div class="card-body d-flex justify-content-center ">
                <h2>ĐƠN HÀNG CHỜ</h2>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="dongytaodonhangcho">
        <!-- GOI MODAL XAC NHAN TAO DON HANG -->
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
            Tạo mới đơn hàng
        </button>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    </div>
    <!-- BANG DON HANG CHO DA GUI -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "quanlidonhangdangcho/bangdonhangdangcho.php"; ?>
    </div>
</div>  <!-- END ROW -->

<?php
    require "modal/modalkhachhang.php";
?>