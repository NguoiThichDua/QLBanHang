
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
    

    <div class="col col-sm col-md col-lg col-xl-3"></div>
    <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center mt-3">
        <form action="controller/khachhangcontroller.php?yc=khachhangthem" method="post" class="w-100">   
            <div class="form-group">
                <label for="" class="text-dark">Tên tài khoản: (<span class="need">*</span>) </label>
                <input type="text" name="tentaikhoan" class="form-control rounded-pill" required title="Không được để rỗng trường này">
            </div> 
            
            <div class="form-group">
                <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                <input type="password" name="matkhau" class="form-control rounded-pill" required title="Không được để rỗng trường này">
            </div>

            <div class="form-group">
                <label for="" class="text-dark">Nhập lại mật khẩu: (<span class="need">*</span>)</label>
                <input type="password" name="matkhaunhaplai" class="form-control rounded-pill" required title="Không được để rỗng trường này">
            </div>
            <div class="form-group">
                <label for="" class="text-dark">Số điện thoại: (<span class="need">*</span>)</label>
                <input type="number" name="sodienthoai" class="form-control rounded-pill" required title="Không được để rỗng trường này">
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
                        <a href="index.php" class="">Trở về trang đăng nhập</a>
                    </div> 
                </div> 
            </div>
               
               
               
            </div>
        </form>
    </div>
    <div class="col col-sm col-md col-lg col-xl-3"></div>
</div>
