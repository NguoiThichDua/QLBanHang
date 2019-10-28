
<?php
    require "model/khachhangclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body text-center">
                <h2>QUẢN LÍ KHÁCH HÀNG</h2>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <?php require "themmoi.php"; ?>
    </div>  <!-- END COL -->
        

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "danhsachkhachhang.php"; ?>
    </div>  <!-- END COL -->
</div>  <!-- END ROW -->



<?php 
   require "view/component/quanli/model/modalkhachhang.php";
?>




