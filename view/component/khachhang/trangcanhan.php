<!-- 
    # lay ten tai khoan boi SESSION khi dang nhap
    # $tentaikhoan duoc lay tu navbar 
    # tu $tentaikhoan lay ra cac thong tin de hien thi
 -->

<?php
    // khong can required khachhangclass() vi no duoc goi vao o navbar roi
    $khachhang = new khachhangclass();

    // kiem tra lay duoc $tentaikhoan khong, $tentaikhoan lay duoc tu navbar 
    if($tentaikhoan == NULL || $tentaikhoan == ""){
        ?>
            <div class="alert alert-danger" role="alert">
                Không xác định được tài khoản
            </div>  
        <?php
    }else{
        // lay duoc ten tai khoan de hien thi nhung thong tin cua tai khoan do ra
        $thongtinkhachang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);

        // kiem tra $tentaikhoan co lay duoc thong tin hay khong
        if($thongtinkhachang == NULL){
            ?>
                <div class="alert alert-danger" role="alert">
                    Không lấy được thông tin tài khoản
                </div> 
            <?php
        // kiem tra co lay dung $tentaikhoan cua SESSION khong
        }else if($thongtinkhachang->tentaikhoan == $_SESSION['khachhang']){
            ?>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <img src="public/images/joker.jpg" class="card-img-top img-fluid" alt="..." style="width: auto;max-width: 100%;min-height:250px; max-height: 600px">
                            <div class="" style="margin-top:-130px">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="public/images/son.jpg" class="rounded-circle" alt="Lỗi hiển thị" style="width: 250px; height: 250px;border: 5px solid #fff">
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-end">
                                        <div >
                                            <h4 style="margin-top: -75px"> <strong><?php echo $thongtinkhachang->hoten; ?></strong> </h4>
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
                    </div>

                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-dark mt-3 text-center table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Hàng đã đặt</th>
                                            <th scope="col">Ngày tạo</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        try {
                                            $tentaikhoan = $_SESSION['khachhang'];

                                            $nguoidung = new khachhangclass();
                                            $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                                            $makhachhang = $thongtin->makhachhang;

                                            require "model/donhangchoclass.php";

                                            $donhangcho = new donhangchoclass();
                                            $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHang($makhachhang);

                                            $stt = 1;

                                            foreach ($thongtin as $tt) {
                                                if($tt->trangthai == "daduyet"){
                                            ?>
                                                    <tr class="ChiTietDonHangCho">
                                                        <td><?php echo $stt++; ?></td>
                                                        <td><?php 
                                                                if($tt->trangthai=="daduyet"){
                                                                    echo "<span class='text-success'>Đã duyệt</span>";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $thongtinhangcuadonhangcho = $donhangcho->ChiTietMotDonHangDaGui($makhachhang, $tt->madonhangcho);
                                                                foreach ($thongtinhangcuadonhangcho as $tth) {
                                                                    ?>
                                                                        <?php echo $tth->tenhanghoa .": <span class='text-info'>".  $tth->soluong . "</span><br>"?>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="text-success"><?php echo $tt->ngaytao;?></td>
                                                        <td>
                                                           
                                                        </td>
                                                       
                                                       
                                                    </tr>
                                            <?php
                                                }
                                            }
                                        } catch (Exception $e ) {
                                            echo $e;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
        // khong lay duoc $tentaikhoan or lay sai $tentaikhoan
        }else{
            ?>
                <div class="alert alert-danger" role="alert">
                    Tài khoản không xác định
                </div>
            <?php  
        }
    }
?>


<?php 
    require "view/component/khachhang/modalkhachhang.php";
?>