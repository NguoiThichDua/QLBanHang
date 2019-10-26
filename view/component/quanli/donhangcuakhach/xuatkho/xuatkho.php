
<?php 
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
    require "model/donhangclass.php";
?>

<div class="row">
    <!-- CHUC NANG LOC -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
        <?php require "boloc.php";?>
    </div>

    <!-- BANG HIEN THI DU LIEU -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php require "bangdaduyet.php";?>
    </div>
</div>

<?php
    require "view/component/quanli/donhangcuakhach/model/modalsuacongno.php";
?>