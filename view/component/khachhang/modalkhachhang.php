<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Xác nhận tạo đơn hàng chờ mới...?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                <input type="submit" value="Đồng ý" class="btn btn-success">
            </form>
            <!-- <button type="button" class="btn btn-primary themmoidonhangcho" data-dismiss="modal">Đồng ý</a> -->
        </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="thaymatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/khachhangcontroller.php?yc=thaymatkhau" method="post">
                    <!-- $thongtinkhachang lay tu trang ca nhan -->
                    <input type="text" name="makhachhang" value="<?php echo $thongtinkhachang->makhachhang?>" class="d-none">

                    <div class="form-group">
                        <label for="" class="text-dark">Mật khẩu cũ: (<span class="need">*</span>)</label>
                        <input type="password" name="matkhaucu"  class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>

                    <div class="form-group">
                        <label for="" class="text-dark">Mật khẩu mới: (<span class="need">*</span>)</label>
                        <input type="password" name="matkhau" id="matkhaudangki" onkeyup="checkmatkhau()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        <small class="d-flex justify-content-end mt-3" id="dodaimatkhaudangki"></small>
                    </div>

                    <div class="form-group">
                        <label for="" class="text-dark">Nhập lại mật khẩu mới: (<span class="need">*</span>)</label>
                        
                        <div class="input-group mb-3">
                            <input type="password" name="matkhaunhaplai" id="matkhaunhaplai" aria-label="" aria-describedby="basic-addon2" onkeyup="checknhaplaimatkhau()" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                            <div class="input-group-append rounded-pill">
                                <img src="public/images/eye.png" class="input-group-text rounded-pill" onclick="showpassdangki()" id="basic-addon2" alt="" width="50px">
                            </div>
                        </div>
                        <small class="d-flex justify-content-end mt-3" id="showmatkhaunhaplai"></small>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" value="Đồng ý" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>