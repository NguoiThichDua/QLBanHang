
<?php 
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
    require "model/donhangclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
        <div class="card mb-3">
            <div class="card-header bg-dark text-light">
                Lọc / Tìm kiếm
            </div>
            <div class="card-body bg-secondary">
                <p>
                    <a class="btn btn-success" data-toggle="collapse" href="#loccongno" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lọc theo công nợ
                    </a>
                    <a class="btn btn-danger" data-toggle="collapse" href="#lochangton" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lọc theo hàng tồn
                    </a>
                </p>
                <div class="collapse" id="loccongno">
                    <div class="card card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Nhập tên: </label>
                                        <input type="text" class="form-control rounded-pill" id="tenkhachhangtim" onkeyup="TimTenKhachHang()">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Nhập số điện thoại: </label>
                                        <input type="text" class="form-control rounded-pill" id="sodienthoaikhachhangtim" onkeyup="TimTenKhachHang()">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Ngày bắt đầu: </label>
                                        <input type="date" class="form-control rounded-pill" id="ngaybatdautim" onkeyup="TimTenKhachHang()">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Ngày kết thúc tìm: </label>
                                        <input type="date" class="form-control rounded-pill" id="ngayketthuctim" onkeyup="TimTenKhachHang()">
                                    </div>
                                </div>
                            </div>
                          
                        </form>
                        <button class="btn btn-success col-3" onclick="TimTenKhachHang()">Lọc theo ngày</button>
                    </div>
                </div>

                <p>
                    
                </p>
                <div class="collapse" id="lochangton">
                    <div class="card card-body">
                        Lọc theo hàng tồn ở đây
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="card w-100 text-center">
            <h3>Đã Duyệt</h3>
        </div>
    </div> 

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive">
            <table class="table table-dark mt-3 text-center table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <!-- <th scope="col">Mã đơn hàng chờ</th> -->
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Ngày duyệt</th>
                        <th scope="col">Hàng đã đặt</th>

                        <th scope="col">Số lô - NXS</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Công nợ</th>
                        <th scope="col">SĐT</th>

                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody id="loctheodieukien">
                <?php 
                    try {
                    
                        $donhangcho = new donhangchoclass();

                        $stt = 1;

                        $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHangDaDuyet();

                        foreach ($thongtin as $tt) {
                            if($tt->trangthai == "daduyet"){
                        ?>
                            
                                <tr class="ChiTietDonHangCho duyetdonhangcho" >
                                    <td><?php echo $stt++; ?></td>
                                    <!-- <td><?php echo $tt->madonhangcho; ?></td> -->
                                    <td><?php 
                                            $khachhang = new khachhangclass();
                                            $thongtinkhach = $khachhang->LayMotkhachhang($tt->makhachhang);

                                            echo $thongtinkhach->hoten;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($tt->trangthai=="chuagui"){
                                                echo "<span class='text-danger'>Đơn hàng chưa được gửi. Hãy xóa nó...!</span>";
                                            }else{
                                                echo $tt->ghichu;
                                            }
                                        ?>
                                    </td>
                                    <td class="text-success"><?php echo $tt->ngayduyet;?></td>
                                    <td>
                                        <?php 
                                            $thongtinhangcuadonhangcho = $donhangcho->ChiTietMotDonHangDaGui($tt->makhachhang, $tt->madonhangcho);
                                            foreach ($thongtinhangcuadonhangcho as $tth) {
                                                ?>
                                                    <?php echo $tth->tenhanghoa .": <span class='text-info'>".  $tth->soluong . "</span><br>"?>
                                                <?php
                                            }
                                        ?>
                                    </td>

                                    <td><?php echo $tt->solo_nsx;?></td>
                                    <td><?php echo $tt->thanhtien;?></td>
                                    <td><?php echo $tt->congno;?></td>
                                    <td><?php echo $tt->sodienthoai;?></td>

                                    <td>
                                        <?php
                                            if($tt->trangthai=="chuagui"){
                                            ?>
                                                <form action="controller/donhangchocontroller.php?yc=xoadonhangchuagui&madonhangcho=<?php echo $tt->madonhangcho;?>" method="post">
                                                    <input type="submit" value="Xóa" class="btn btn-danger">
                                                </form>
                                            <?php
                                            }else{
                                                $donhang = new donhangclass();
                                                $thongtindonhang = $donhang->LayDonHangBangMaDonHangCho($tt->madonhangcho);
                                                ?>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suadonhangdaduyet" onclick="ThayDoiCongNo('<?php echo $thongtindonhang->madonhang;?>', '<?php echo $thongtindonhang->congno;?>')">
                                                        Sửa
                                                    </button>
                                                <?php
                                            }
                                        ?>
                                    <td/>
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



<!-- MODEL SỬA CÔNG NỢ ĐƠN HÀNG -->
<div class="modal fade" id="suadonhangdaduyet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay đổi công nợ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/donhangcontroller.php?yc=suacongno" method="post">
                    <div class="form-group">
                    <input type="text" name="madonhang" id="madonhangsuacongno" value="" class="form-control rounded-pill d-none" readonly required>
                        <label for="">Công nợ</label>
                        <input type="number" name="congno" value="" id="congnosua" class="form-control rounded-pill" required>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Thay đổi" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>