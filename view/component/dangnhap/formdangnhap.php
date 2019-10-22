<form action="controller/nguoidungcontroller.php?yc=dangnhap" method="post" class="w-100">   
    <div class="form-group">
        <label for="" class="text-dark">Tên tài khoản:</label>
        <input type="text" name="tentaikhoan" id="tentaikhoandangnhap" class="form-control rounded-pill" required value="<?php if(isset($_REQUEST['tentaikhoan'])){echo $_REQUEST['tentaikhoan'];} ?>">
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
            <a href="#" class="">Quên mật khẩu...?</a>
        </div>
    </div>
</form>