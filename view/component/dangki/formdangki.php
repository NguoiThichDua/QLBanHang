<div class="container">
    <form action="controller/khachhangcontroller.php?yc=khachhangthem" method="post" class="mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-7 mb-3 box ">
                <!-- LOGO -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
                    <img src="public/images/logowhite.png" alt="" srcset="" width="auto" height="100px">
                </div>
           
                <!--  TAI KHOAN -->
                <div class=" pb-4 mt-3">
                    <div class="text-light text-center">
                        <h3>Đăng Kí Tài Khoản</h3>
                    </div>

                     <!-- MESSAGE -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3 w-100">
                        <?php 
                            require "view/component/include/message.php";
                        ?>
                    </div>
                    <div class="mt-3">
                        <div class="form-group inputBox">
                            <input type="number" name="tentaikhoan" id="tentaikhoandangki" class="" onkeyup="checktentaikhoandangki()" required title="Không được để rỗng trường này">
                            <label for="" class="text-light">Tên tài khoản: (<span class="need">Số điện thoại</span>) </label>
                            <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangki"></small>
                        </div> 
                        
                        <div class="form-group inputBox">
                            
                            <input type="password" name="matkhau" id="matkhaudangki" onkeyup="checkmatkhau()" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-light">Mật khẩu: (<span class="need">*</span>)</label>
                            <small class="d-flex justify-content-end mt-3" id="dodaimatkhaudangki"></small>
                        </div>

                        <div class="form-group inputBox">
                          
                            
                            <div class="input-group mb-3 eye">
                                <input type="password" name="matkhaunhaplai" id="matkhaunhaplai" aria-label="" aria-describedby="basic-addon2" onkeyup="checknhaplaimatkhau()" class="" required title="Không được để rỗng trường này">
                                <img src="public/images/eye.png" class="" onclick="showpassdangki()" id="basic-addon2" alt="" width="30px" height="30px">
                                <label for="" class="text-light">Nhập lại mật khẩu: (<span class="need">*</span>)</label>
                            </div>
                           
                            <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
                        </div>
                    </div>
                </div>  <!-- END  TAI KHOAN -->
            </div>  <!-- END CLASS COL-->


            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-7 box">
                <!--  THONG TIN CA NHAN -->
                <div class=" mt-3">
                    <div class="text-light">
                        Thông Tin Cá Nhân
                    </div>
                    <div class="mt-3">
                        <div class="form-group inputBox">
                            
                            <input type="text" name="diachi" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-light">Địa chỉ: (<span class="need">*</span>)</label>
                        </div>
                        <div class="form-group inputBox">
                            
                            <input type="text" name="hoten" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-light">Họ tên: (<span class="need">*</span>)</label>
                        </div>
                        <div class="form-group inputBox">
                           
                            <input type="text" name="tructhuoc" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-light">Trực thuộc: (<span class="need">*</span>)</label>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-light">Cấp bậc: (<span class="need">*</span>)</label>
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
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class=" d-flex justify-content-start">
                                        <input type="submit" value="Đăng Kí" class="btn btn-success">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class=" d-flex justify-content-end">
                                        <a href="index.php" class="btn btn-danger">Đăng Nhập</a>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>  <!-- END  THONG TIN CA NHAN-->
            </div>  <!-- END CLASS COL-->
        </div>  <!-- END CLASS ROW-->
    </form>
</div>
