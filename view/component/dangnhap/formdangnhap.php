
<!-- LOGO -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3 mb-3">
    <img src="public/images/default/logo.png" alt="" srcset="" width="auto" height="100px">
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mb-3 text-center">
    <h5><strong>ĐĂNG NHẬP ĐỂ TIẾP TỤC</strong></h5>
</div>

<div>
    <?php
        require "view/component/include/message.php";
    ?>
</div>

<form action="controller/nguoidungcontroller.php?yc=dangnhap" method="post" class="w-100">   
    <div class="form-group inputBox">
        <input type="text" name="tentaikhoan" id="tentaikhoandangnhap" required value="<?php if(isset($_REQUEST['tentaikhoan'])){echo $_REQUEST['tentaikhoan'];} ?>" title="Không được để trống tài khoản">
        <label for="" class="text-dark">Số điện thoại: </label>
    </div> 

    <div class="form-group inputBox">
        <div class="input-group mb-3 eye">
            <input type="password" name="matkhau" id="matkhaudangnhap" aria-label="" aria-describedby="basic-addon2" id="matkhaudangnhap" required  title="Không được để trống mật khẩu">
            <img src="public/images/eye.png" class=" " onclick="showpassdangnhap()" id="basic-addon2" alt="" width="30px" height="30px">
            <label for="" class="text-dark">Mật khẩu:</label>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mb-3">
                <input type="submit" value="ĐĂNG NHẬP" class="btn btn-success btn-lg">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mb-3">
                <strong>- HOẶC -</strong>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                <a href="index.php?page=dangki" class="btn btn-warning btn-lg">ĐĂNG KÍ</a>
            </div>
        </div>
    </div>
</form>

