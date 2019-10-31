
<?php
    require "model/khachhangclass.php";
?>

<div class="row">
       
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="position-absolute" style="z-index: 999; left: 10px">       
            <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="index.php">Trang Chủ</a>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
            <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
            <h4><strong class="chaomung">QUẢN LÍ KHÁCH HÀNG</strong></h4>    
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <?php require "themmoi.php"; ?>
    </div>  <!-- END COL -->
        

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-ca-nhan">
        <?php require "danhsachkhachhang.php"; ?>
    </div>  <!-- END COL -->
</div>  <!-- END ROW -->



<?php 
   require "view/component/quanli/model/modalkhachhang.php";
?>




