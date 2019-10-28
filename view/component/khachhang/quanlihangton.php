<?php
    require "model/donhangclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <h3>QUẢN LÍ HÀNG TỒN</h3>
    </div>
    
    <!-- TONG CAC MON HANG DA DAT -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "quanlihangton/cardtonghangdadat.php";?>
    </div>

	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#capnhathangton">
			Cập nhật hàng tồn
		</button>
	</div>

    <!-- CAC THON TIN CAP NHAT -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      	<?php require "quanlihangton/hangton.php";?>
    </div>
    
</div>

<?php
    require "modal/taocapnhathangton.php"
?>

