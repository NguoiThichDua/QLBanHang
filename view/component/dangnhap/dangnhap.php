
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <img src="public/images/logo.png" alt="" srcset="" width="auto" height="100px">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <h2 class="titledangnhap">QUẢN LÍ BÁN HÀNG</h2>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <h3>ĐĂNG NHẬP</h3>
    </div>


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3 w-100">
        <?php 
            require "view/component/include/message.php";
        ?>
    </div>
    

    <div class="col col-sm col-md col-lg col-xl-3"></div>
    <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center mt-3">
        <form action="controller/nguoidungcontroller.php?yc=dangnhap" method="post" class="w-100">   
            <div class="form-group">
                <label for="" class="text-dark">Tên tài khoản:</label>
                <input type="text" name="tentaikhoan" id="tentaikhoandangnhap" class="form-control rounded-pill" required value="<?php if(isset($_REQUEST['tentaikhoan'])){echo $_REQUEST['tentaikhoan'];} ?>">
            </div> 
            
            <div class="form-group">
                
            </div>

            <div class="form-group">
                <label for="" class="text-dark">Mật khẩu:</label>
                <div class="input-group mb-3">
                    <input type="password" name="matkhau" id="matkhaudangnhap" aria-label="" aria-describedby="basic-addon2" id="matkhaudangnhap" class="form-control rounded-pill" required>
                    <div class="input-group-append">
                        <img src="public/images/eye.png" class="input-group-text rounded-pill" onclick="showpassdangnhap()" id="basic-addon2" alt="" width="50px">
                    </div>
                </div>
                <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
            </div>



            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <a href="index.php?page=dangki" class="btn btn-secondary m-3 rounded-lg">Đăng Kí</a>
                    <input type="submit" value="Đăng Nhập" class="btn btn-success m-3 rounded-lg">
                </div>
            </div>

            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <a href="index.php" class="">Quên mật khẩu...?</a>
                </div>
            </div>
        </form>
    </div>
    <div class="col col-sm col-md col-lg col-xl-3"></div>
</div>
