
<?php 
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
    require "model/donhangclass.php";
?>

<div class="row">
    <!-- CHUC NANG LOC -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
        <?php require "daduyet/boloc.php";?>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="card w-100 text-center">
            <h3>Đã Duyệt</h3>
        </div>
    </div> 

    <!-- BANG HIEN THI DU LIEU -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "daduyet/bangdaduyet.php";?>
    </div>
</div>

<?php
    require "modal/modalsuacongno.php";
?>