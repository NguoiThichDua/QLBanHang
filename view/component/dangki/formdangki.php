
    <!-- LOGO -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
        <img src="public/images/default/logo.png" alt="" srcset="" width="auto" height="100px">
    </div>

     <!-- MESSAGE -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3 w-100">
        <?php 
            require "view/component/include/message.php";
        ?>
    </div>

    <form action="controller/khachhangcontroller.php?yc=khachhangthem" method="post" class="w-100 ">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3" id="dangkitaikhoan">

                    <div class="text-dark text-center">
                        <h5><strong>ĐĂNG KÍ TÀI KHOẢN</strong></h5>
                    </div>
                    
                    <div class="mt-3">
                        <div class="form-group inputBox ">
                            <input type="number" name="tentaikhoan" id="tentaikhoandangki" class="" onkeyup="checktentaikhoandangki()" required title="Không được để rỗng trường này">
                            <label for="" class="text-dark">Số điện thoại: (<span class="need">Tên đăng nhập</span>) </label>
                            <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangki"></small>
                        </div> 
                        
                        <div class="form-group inputBox">
                            <input type="password" name="matkhau" id="matkhaudangki" onkeyup="checkmatkhau()" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                            <small class="d-flex justify-content-end mt-3" id="dodaimatkhaudangki"></small>
                        </div>

                        <div class="form-group inputBox">
                            <div class="input-group eye">
                                <input type="password" name="matkhaunhaplai" id="matkhaunhaplai" aria-label="" aria-describedby="basic-addon2" onkeyup="checknhaplaimatkhau()" class="" required title="Không được để rỗng trường này">
                                <img src="public/images/eye.png" class="" onclick="showpassdangki()" id="basic-addon2" alt="" width="30px" height="30px">
                                <label for="" class="text-dark">Nhập lại mật khẩu: (<span class="need">*</span>)</label>
                            </div>
                           
                            <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group inputBox text-dark d-flex justify-content-center ">
                                    1 / 2
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group inputBox d-flex justify-content-center">
                                    <a href="index.php" class="btn btn-outline-danger mr-3">Về Đăng Nhập</a>
                                    <div class="btn btn-success" onclick="NextDangKi()">Tiếp tục</div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>  <!-- END CLASS COL-->


            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="thongtincanhandangki">
                <!--  THONG TIN CA NHAN -->
                <div class="">
                    <div class="text-dark text-center">
                        <h5><strong>THÔNG TIN CÁ NHÂN</strong></h5>
                    </div>
                    <div class="mt-3">
                        <div class="form-group inputBox">
                            <input type="text" name="diachi" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                        </div>
                        <div class="form-group inputBox">
                            
                            <input type="text" name="hoten" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                        </div>
                        <div class="form-group inputBox">
                           
                            <input type="text" name="tructhuoc" class="" required title="Không được để rỗng trường này">
                            <label for="" class="text-dark">Trực thuộc: (<span class="need">*</span>)</label>
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group inputBox d-flex justify-content-center text-dark">
                                        2 / 2
                                    </div>
                                </div>
                                <div class="col-21 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="btn btn-warning mr-3" onclick="BackDangKi()">Về trước</div>
                                        <input type="submit" value="Đăng Kí" class="btn btn-success">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class=" d-flex justify-content-center mt-3">
                                        <a href="index.php" class="btn btn-outline-danger">Về Đăng Nhập</a>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>  <!-- END  THONG TIN CA NHAN-->
            </div>  <!-- END CLASS COL-->
        </div>  <!-- END CLASS ROW-->
    </form>



