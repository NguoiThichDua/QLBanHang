<?php

    // khong can required khachhangclass() vi no duoc goi vao o navbar roi

    $khachhang = new khachhangclass();

    // ten tai khoan lay duoc tu navbar
    $thongtinkhachang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);
   
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <img src="public/images/joker.jpg" class="card-img-top img-fluid" alt="..." style="width: auto;max-width: 100%;min-height:250px; max-height: 600px">
            <div class="" style="margin-top:-110px">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/son.jpg" class="rounded-circle" alt="Lỗi hiển thị" style="width: 200px; height: 200px;border: 5px solid #fff">
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-end">
                        <div >
                            <h4 style="margin-top: -60px"> <strong><?php echo $thongtinkhachang->hoten; ?></strong> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="suathongtincanhan">
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

                <button class="btn btn-success suathongtin">Sửa thông tin</button>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
        <div class="card">
            Đơn hàng đã xác nhận sẽ xuất hiện ở đây
        </div>
    </div>
</div>

