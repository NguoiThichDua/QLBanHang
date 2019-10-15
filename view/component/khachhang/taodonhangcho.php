<?php 
    require "model/hanghoaclass.php";
    require "model/chitiethanghoaclass.php";
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
?>
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mt-3">
            <div class="card-body">
                <form action="controller/donhangchocontroller.php?yc=themhanghoachodonhangcho" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <select class=form-control name="mahang">
                            <?php 
                                $hanghoa = new hanghoaclass();
                                $thongtin = $hanghoa->LayTatCaHangHoa();

                                foreach ($thongtin as $tt) {
                                ?>
                                    <option value="<?php echo $tt->mahanghoa;?>"><?php echo $tt->tenhanghoa; ?></option>
                                <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="form-control mt-3 btn btn-primary" onclick="ThemHangHoa()">Chọn</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive ">
            <table class="table table-dark mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $tentaikhoan = $_SESSION['khachhang'];

                    $nguoidung = new khachhangclass();
                    $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                    $makhachhang = $thongtin->makhachhang;

                    $donhang = new donhangchoclass();
                    $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);
                    $madonhangcho = $thongtin->MAX;

                    $chitietdonhang = new chitiethanghoaclass();
                    $thongtin = $chitietdonhang->LayHangHoaCuaDonHangDangTao($madonhangcho);

                    $stt = 1;

                    foreach ($thongtin as $tt) {
                       ?>
                        <tr>
                            <th><?php echo $stt++; ?></th>
                            <td>
                                <?php 
                                   echo $tt->tenhanghoa;
                                ?>
                            </td>
                            <td><?php echo $tt->soluong;?></td>
                            <td>
                                <button class="btn btn-warning">Sửa</button>
                                <button class="btn btn-danger">Xóa</button>
                            </td>
                        </tr>
                       <?php
                    }
                ?>
                </tbody>
            </table>

            <div class="card mt-3">
                <div class="card-body">
                    <form action="controller/donhangchocontroller.php?yc=guichoadmin" method="post" class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success " value="Xác nhận thêm đơn hàng chờ">
                    </form>
                    <hr>
                    <form action="controller/donhangchocontroller.php?yc=huydonhangcho" method="post" class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-danger " value="Hủy bỏ đơn hàng này">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>