
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <img src="public/images/logo.png" alt="" srcset="" width="auto" height="100px">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <h3 class="text-danger">Đăng Kí</h3>
    </div>


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3 w-100">
        <?php 
            require "view/component/include/message.php";
        ?>
    </div>
    

    <div class="col col-sm col-md col-lg col-xl"></div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <form action="controller/khachhangcontroller.php?yc=khachhangthem" method="post" class="w-100">

            <div class="row">
                <div class="col-md-6">
                    <div class="card pb-4 mt-3">
                        <div class="card-header">
                            Tài khoản
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="" class="text-dark">Tên tài khoản: (<span class="need">*</span>) </label>
                                <input type="text" name="tentaikhoan" id="tentaikhoandangki" class="form-control rounded-pill" onkeyup="checktentaikhoandangki()" required title="Không được để rỗng trường này">
                                <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangki"></small>
                            </div> 
                            
                            <div class="form-group">
                                <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                                <input type="password" name="matkhau" id="matkhaudangki" onkeyup="checkmatkhau()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                                <small class="d-flex justify-content-end mt-3" id="dodaimatkhaudangki"></small>
                            </div>

                            <div class="form-group">
                                <label for="" class="text-dark">Nhập lại mật khẩu: (<span class="need">*</span>)</label>
                                
                                <div class="input-group mb-3">
                                    <input type="password" name="matkhaunhaplai" id="matkhaunhaplai" aria-label="" aria-describedby="basic-addon2" onkeyup="checknhaplaimatkhau()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                                    <div class="input-group-append rounded-pill">
                                        <img src="public/images/eye.png" class="input-group-text rounded-pill" onclick="showpassdangki()" id="basic-addon2" alt="" width="50px">
                                    </div>
                                </div>
                                <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-header">
                            Thông tin cá nhân
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="" class="text-dark">Số điện thoại: (<span class="need">*</span>)</label>
                                <input type="number" name="sodienthoai" id="sodienthoaidangki" onkeyup="checksodienthoai()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                                <small class="d-flex justify-content-end mt-3" id="showsodienthoaidangki"></small>
                            </div>
                            <div class="form-group">
                                <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                                <input type="text" name="diachi" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                                <input type="text" name="hoten" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" value="Đăng kí" class="btn btn-success">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <footer class="blockquote-footer mt-3"><a href="index.php" class="">Trở về trang đăng nhập</a></footer>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col col-sm col-md col-lg col-xl"></div>
</div>
