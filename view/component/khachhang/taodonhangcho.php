<?php 
    require "model/hanghoaclass.php";
    require "model/chitiethanghoaclass.php";
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
?>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card mt-3">
            <div class="card-body">
                <form action="controller/donhangchocontroller.php?yc=themhanghoachodonhangcho" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="mt-3 btn btn-primary">Thêm vào đơn hàng</button>
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
                <form action="controller/donhangchocontroller.php?yc=guichoadmin" method="post">
                    <div class="form-group">
                        <label for="">Ghi chú cho đơn hàng này: </label>
                        <textarea name="ghichu" id="" cols="" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        
                        <?php
                            if(isset($_REQUEST['kq'])){
                                if($_REQUEST['kq'] == "dathemhang" || $_REQUEST['kq'] == "datontaimonhang"){
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
                                <div class=row>
                                    <div class="col-6">

                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#thaydoisoluonghanghoa" onclick="ThayDoiSoLuongHang('<?php echo $tt->macthh?>', '<?php echo $tt->madonhangcho;?>', '<?php echo $tt->soluong?>')">
                                        Thay đổi số lượng
                                    </button>
                                       
                                    </div>
                                    <div class="col-6">
                                        <form action="controller/donhangchocontroller.php?yc=xoahanghoatrongdonhangcho&madonhangcho=<?php echo $madonhangcho?>&macthh=<?php echo $tt->macthh?>" method="post">
                                            <input type="submit" class="btn btn-danger ml-3" value="Loại bỏ">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       <?php
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
