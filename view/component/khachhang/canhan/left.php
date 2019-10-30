<!-- $thongtinkhachang lay tu trangcanhan.php -->

<div class="card mb-3">
    <div class="card-header bg-browns text-light">
       THÔNG TIN CỦA BẠN
    </div>
    <div class="card-body bg-brown text-light">
        <label for=""> Họ & Tên:</label>
        <div class="alert alert-primary rounded-pill" role="alert">
            <strong><div id="hotenkhachhang"><?php echo $thongtinkhachang->hoten?></div></strong>
        </div>

        <label for=""> Địa chỉ:</label>
        <div class="alert alert-secondary rounded-pill" role="alert">
            <strong><div id="diachikhachhang"><?php echo $thongtinkhachang->diachi?></div></strong>
        </div>

        <label for="">Số điện thoại: </label>
        <div class="alert alert-warning rounded-pill" role="alert">
            <strong><div id="sodienthoaikhachhang"><?php echo $thongtinkhachang->sodienthoai?></div></strong>
        </div>

        <label for="">Trực thuộc: </label>
        <div class="alert alert-info rounded-pill" role="alert">
            <strong><div id="sodienthoaikhachhang"><?php echo $thongtinkhachang->tructhuoc?></div></strong>
        </div>

        <button class="btn btn-success suathongtin">Sửa thông tin</button>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header bg-browns text-light">
        BẢO MẬT TÀI KHOẢN:
    </div>
    <div class="card-body bg-brown text-light">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#thaymatkhau">
            Thay đổi mật khẩu
        </button>
    </div>
</div>