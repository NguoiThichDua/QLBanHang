<div class="box col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- LOGO -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <img src="public/images/logowhite.png" alt="" srcset="" width="auto" height="100px">
    </div>

    <div>
        <?php
            require "view/component/include/message.php";
        ?>
    </div>

    <form action="controller/nguoidungcontroller.php?yc=dangnhap" method="post" class="w-100 mt-5">   
        <div class="form-group inputBox ">
            <input type="text" name="tentaikhoan" id="tentaikhoandangnhap" required value="<?php if(isset($_REQUEST['tentaikhoan'])){echo $_REQUEST['tentaikhoan'];} ?>" title="Không được để trống tài khoản">
            <label for="" class="text-light">Số điện thoại: </label>
        </div> 

        <div class="form-group inputBox">
            <div class="input-group mb-3 eye">
                <input type="password" name="matkhau" id="matkhaudangnhap" aria-label="" aria-describedby="basic-addon2" id="matkhaudangnhap" required  title="Không được để trống mật khẩu">
                <img src="public/images/eye.png" class=" " onclick="showpassdangnhap()" id="basic-addon2" alt="" width="30px" height="30px">
                <label for="" class="text-light">Mật khẩu:</label>
            </div>
        </div>

        <div class="form-group">
            <div class="d-flex justify-content-center">
                <a href="index.php?page=dangki" class="btn btn-warning m-3 rounded-lg">Đăng Kí</a>
                <input type="submit" value="Đăng Nhập" class="btn btn-success m-3 rounded-lg">
            </div>
        </div>

        <div class="form-group">
            <div class="d-flex justify-content-center">
                <a href="#" class="text-primary" style="text-decoration: none;">Quên mật khẩu...?</a>
            </div>
        </div>
    </form>
</div>
