<!-- $thongtinkhachang lay tu trangcanhan.php -->

<div class="card mb-3">
    <div class="card-header">
        Thông tin của bạn:
    </div>
    <div class="card-body">
        <label for=""> Họ & Tên:</label>
        <div class="alert alert-primary" role="alert">
            <strong><div id="hotenkhachhang"><?php echo $thongtinkhachang->hoten?></div></strong>
        </div>

        <label for=""> Địa chỉ:</label>
        <div class="alert alert-secondary" role="alert">
            <strong><div id="diachikhachhang"><?php echo $thongtinkhachang->diachi?></div></strong>
        </div>

        <label for="">Số điện thoại: </label>
        <div class="alert alert-warning" role="alert">
            <strong><div id="sodienthoaikhachhang"><?php echo $thongtinkhachang->sodienthoai?></div></strong>
        </div>

        <label for="">Trực thuộc: </label>
        <div class="alert alert-info" role="alert">
            <strong><div id="sodienthoaikhachhang"><?php echo $thongtinkhachang->tructhuoc?></div></strong>
        </div>

        <button class="btn btn-success suathongtin">Sửa thông tin</button>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Bảo mật tài khoản:
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#thaymatkhau">
            Thay đổi mật khẩu
        </button>
    </div>
</div>