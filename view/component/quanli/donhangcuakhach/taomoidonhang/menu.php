
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header bg-dark text-light">
                Tạo đơn hàng cho khách
            </div>
            <div class="card-body bg-secondary">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">

                            <div class="row">
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    1. Chưa có tài khoản
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    2. Đã có tài khoản 
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="card">
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4>Chưa có tài khoản: </h4>
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

                                                        <label for="">Số điện thoại: (<span class="text-danger"></span>)</label>
                                                        <input type="number" name="makhachnhap" id="makhachnhap" class="form-control rounded-pill" onkeyup="chektaikhoanthemdonhang()" required title="Không được để rỗng trường này">
                                                        <small class="d-flex justify-content-end mt-3" id="showtentaikhoandangkii"></small>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#taodonhangmoi" onclick="LayMaKhach()">
                                                    Tạo đơn hàng mới
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  




<!-- Modal -->
<div class="modal fade" id="taodonhangmoi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận tạo đơn hàng mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn muốn tạo đơn hàng mới cho số điện thoại này ?
            </div>
            <div class="p-3">
                <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                    <input type="text" name="makhachtaodonhang" id="makhachtaodonhang" class="form-control rounded-pill w-100" title="Không được bỏ trống" required readonly>
                    <input type="submit" value="Đồng ý" class="btn btn-success mt-3">
                    <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>