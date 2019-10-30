<!-- MODAL TAO DON HANG CHO -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-brown text-light">
        <div class="modal-header bg-browns text-light">
            <h5 class="modal-title" id="exampleModalLabel">THÔNG BÁO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Xác nhận tạo đơn hàng chờ mới...?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                <input type="submit" value="Đồng ý" class="btn btn-success">
            </form>
        </div>
        </div>
    </div>
</div>


<!-- DOI MAT KHAU -->
<div class="modal fade" id="thaymatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-browns text-light">
                <h5 class="modal-title" id="exampleModalLabel">ĐỔI MẬT KHẨU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-brown text-light">
                <form action="controller/khachhangcontroller.php?yc=thaymatkhau" method="post">
                    <!-- $thongtinkhachang lay tu trang ca nhan -->
                    <input type="text" name="makhachhang" value="<?php echo $thongtinkhachang->makhachhang?>" class="d-none">

                    <div class="form-group">
                        <label for="" class="">Mật khẩu cũ: (<span class="need">*</span>)</label>
                        <input type="password" name="matkhaucu"  class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>

                    <div class="form-group">
                        <label for="" class="">Mật khẩu mới: (<span class="need">*</span>)</label>
                        <input type="password" name="matkhau" id="matkhaudangki" onkeyup="checkmatkhau()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        <small class="d-flex justify-content-end mt-3" id="dodaimatkhaudangki"></small>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Nhập lại mật khẩu mới: (<span class="need">*</span>)</label>

                        <div class="input-group mb-3">
                            <input type="password" name="matkhaunhaplai" id="matkhaunhaplai" aria-label="" aria-describedby="basic-addon2" onkeyup="checknhaplaimatkhau()" class="form-control" style="border-radius: 50px 0 0 50px" required title="Không được để rỗng trường này">
                            <div class="input-group-append">
                                <img src="public/images/eye.png" style="border-radius: 0px 50px 50px 0px" class="input-group-text" onclick="showpassdangki()" id="basic-addon2" alt="" width="50px">
                            </div>
                        </div>
                        <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <input type="submit" value="Đồng ý" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>