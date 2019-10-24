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

<!-- MODAL -->
<div class="modal fade" id="capnhathangton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tạo bản cập nhật hàng tồn ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/hangtoncontroller.php?yc=themdonhangton" method="post" class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-primary ml-3">OK</button>
        </form>
      </div>
    </div>
  </div>
</div>

