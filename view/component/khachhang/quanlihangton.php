<?php
    require "model/donhangclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="position-absolute" style="z-index: 999; left: 10px">       
            <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="index.php?page=quanli">TRANG CHỦ</a>
        </div>
        <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
        <h4><strong class="chaomung">QUẢN LÍ HÀNG TỒN</strong></h4>    
    </div>

    <div class="col col-sm col-md col-lg col-xl"></div>
    
    <!-- TONG CAC MON HANG DA DAT -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-ca-nhan">
        <?php require "quanlihangton/cardtonghangdadat.php";?>
    </div>

	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-ca-nhan">
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#capnhathangton">
			Cập nhật hàng tồn
		</button>
	</div>

    <!-- CAC THON TIN CAP NHAT -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 left-ca-nhan">
      	<?php require "quanlihangton/hangton.php";?>
    </div>
    
</div>

<?php
    require "modal/taocapnhathangton.php"
?>

