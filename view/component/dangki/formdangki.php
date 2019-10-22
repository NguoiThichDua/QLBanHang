<form action="controller/khachhangcontroller.php?yc=khachhangthem" method="post" class="w-100">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <!-- CARD TAI KHOAN -->
            <div class="card pb-4 mt-3">
                <div class="card-header">
                    Tài khoản
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="text-dark">Tên tài khoản: (<span class="need">Số điện thoại</span>) </label>
                        <input type="number" name="tentaikhoan" id="tentaikhoandangki" class="form-control rounded-pill" onkeyup="checktentaikhoandangki()" required title="Không được để rỗng trường này">
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
            </div>  <!-- END CARD TAI KHOAN -->
        </div>  <!-- END CLASS COL-->

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <!-- CARD THONG TIN CA NHAN -->
            <div class="card mt-3">
                <div class="card-header">
                    Thông tin cá nhân
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                        <input type="text" name="diachi" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                        <input type="text" name="hoten" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark">Trực thuộc: (<span class="need">*</span>)</label>
                        <input type="text" name="tructhuoc" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark">Cấp bậc: (<span class="need">*</span>)</label>
                        <select name="capbac" class="form-control rounded-pill">
                            <option value="si">Sĩ</option>
                            <option value="le">Lẻ</option>
                            <option value="chinhanh">Chi nhánh</option>
                            <option value="daili">Đại lí</option>
                            <option value="tongdaili">Tổng đại lí</option>
                            <option value="nhaphanphoi">Nhà phân phối</option>
                            <option value="nhaphanphoivang">Nhà phân phối vàng</option>
                            <option value="nhaphanphoikimcuong">Nhà phân phối kim cương</option>
                            <option value="giamdockinhdoanh">Giám đốc kinh doanh</option>
                        </select>
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
            </div>  <!-- END CARD THONG TIN CA NHAN-->
        </div>  <!-- END CLASS COL-->
    </div>  <!-- END CLASS ROW-->
</form>