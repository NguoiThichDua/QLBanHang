<?php 
    require "model/hanghoaclass.php";
    require "model/chitiethanghoaclass.php";
    require "model/donhangchoclass.php";
?>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card mt-3">
            <div class="card-body">
                <form action="controller/donhangchocontroller.php?yc=themhanghoachodonhangcho" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><strong>1. Thêm hàng hóa và số lượng</strong></h4>
                            <hr>
                            <div class="form-group">
                                <select class="form-control rounded-pill" name="mahang">
                                <?php 
                                    try {
                                        $hanghoa = new hanghoaclass();
                                        $thongtin = $hanghoa->LayTatCaHangHoa();

                                        foreach ($thongtin as $tt) {
                                            ?>
                                                 <option value="<?php echo $tt->mahanghoa;?>"><?php echo $tt->tenhanghoa; ?></option>
                                            <?php
                                        }
                                    } catch (\Throwable $th) {
                                        echo $th;
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="soluong" min="1" class="form-control rounded-pill" placeholder="Số lượng" required title="Số lượng phải lớn hơn 0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Thêm vào đơn hàng</button>
                                
                                <small>(Cần thêm một món hàng để gửi yêu cầu)</small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card mt-3">
            <div class="card-body">
                <h4><strong>2. Thêm ghi chú và gửi yêu cầu</strong></h4>
                <hr>
                <form action="controller/donhangchocontroller.php?yc=guichoadmin" method="post">
                    <div class="form-group">
                        <textarea name="ghichu" id="" cols="" rows="3" class="form-control pb-2"></textarea>
                    </div>
                    <div class="form-group">
                        <?php
                            if(isset($_REQUEST['kq'])){
                                if($_REQUEST['kq'] == "dathemhang" || $_REQUEST['kq'] == "datontaimonhang" || $_REQUEST['kq'] == "thaydoisoluongthanhcong"){
                                ?>
                                    <input type="submit" class="btn btn-success " value="Xác nhận thêm đơn hàng chờ">
                                <?php
                                }
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="">
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


                    try {
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
                                        <div class=row>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#thaydoisoluonghanghoa" onclick="ThayDoiSoLuongHang('<?php echo $tt->macthh?>', '<?php echo $tt->madonhangcho;?>', '<?php echo $tt->soluong?>')">
                                                    Thay đổi số lượng
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="controller/donhangchocontroller.php?yc=xoahanghoatrongdonhangcho&madonhangcho=<?php echo $madonhangcho?>&macthh=<?php echo $tt->macthh?>" method="post">
                                                    <input type="submit" class="btn btn-danger ml-3" value="Loại bỏ">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                        }
                    } catch (Exception $e) {
                        echo $e;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3">
    <form action="controller/donhangchocontroller.php?yc=huydonhangcho&madonhangcho=<?php echo $madonhangcho?>" method="post">
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Hủy bỏ đơn hàng này">
        </div>
    </form>
</div>


<!-- Button trigger modal -->

<?php
    require "modaldonhangcho.php"
?>
