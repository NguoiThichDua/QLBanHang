
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header bg-browns text-light">
                TẠO ĐƠN HÀNG CHO KHÁCH
            </div>  <!-- END CARD HEADER-->
            <div class="card-body bg-brown">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="accordion" id="accordionExample">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="card rounded-pill">
                                        <div class="card-header rounded-pill" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <strong>1. Chưa có tài khoản</strong>
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card mt-3 rounded-pill">
                                        <div class="card-header rounded-pill" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <strong>2. Đã có tài khoản</strong> 
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                </div>  <!-- END MENU -->

                                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                                    <div class="card mt-3">
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4>Chưa có tài khoản</h4>
                                                <hr>
                                                <form action="controller/khachhangcontroller.php?yc=adminthemmoi" method="post">
                                                    <div class="form-group">
                                                        <label for="">Số điện thoại: (<span class="text-danger">*</span>)</label>
                                                        <input type="number" name="tentaikhoan" id="tentaikhoandangki" class="form-control rounded-pill" onkeyup="checktentaikhoandangki()" required title="Không được để rỗng trường này">
                                                        <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangki"></small>
                                                        <label for="">Mật Khẩu: (<span class="text-danger">*</span>)</label>
                                                        <input type="text" class="form-control rounded-pill" name="matkhau" required title="Không được để rỗng">
                                                        <label for="">Họ tên: (<span class="text-danger">*</span>)</label>
                                                        <input type="text" class="form-control rounded-pill" name="hoten" required title="Không được để rỗng">
                                                        <label for="">Địa chỉ: (<span class="text-danger">*</span>)</label>
                                                        <input type="text" class="form-control rounded-pill" name="diachi" required title="Không được để rỗng">
                                                    </div> 
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success" value="Đăng kí tài khoản này">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4>Tạo mới</h4>
                                                <hr>
                                                <label for="">Số điện thoại: (<span class="text-danger">*</span>)</label>
                                                <input type="number" name="makhachnhap" id="makhachnhap" class="form-control rounded-pill" onkeyup="chektaikhoanthemdonhang()" required title="Không được để rỗng trường này">
                                                <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangkii"></small>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#taodonhangmoi" onclick="LayMaKhach()">
                                                    Tạo đơn hàng mới
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <!-- END TUY CHON -->
                            </div>
                        </div>
                    </div>
                </div>  <!-- END ROW -->
            </div>  <!-- END CARD BODY-->
        </div>  <!-- END CARD -->
    </div>  <!-- END COL -->
</div>  <!-- END ROW --> 


<!-- MODEL -->
<div class="modal fade" id="taodonhangmoi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-brown text-light">
            <div class="modal-header bg-browns text-light">
                <h5 class="modal-title " id="exampleModalLabel">XÁC NHẬN TẠO ĐƠN HÀNG MỚI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-brown text-light">
                Bạn muốn tạo đơn hàng mới cho số điện thoại này ?
            </div>
            <div class="mb-3 bg-brown text-light">
                <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                    <input type="text" name="makhachtaodonhang" id="makhachtaodonhang" class="form-control rounded-pill w-100" title="Không được bỏ trống" required readonly>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mt-3 mr-3" data-dismiss="modal">Hủy</button>
                        <input type="submit" value="Đồng ý" class="btn btn-success mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>