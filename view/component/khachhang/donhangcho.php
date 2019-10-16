<?php 
    require "model/hanghoaclass.php"; 
    require "model/khachhangclass.php"; 
    require "model/donhangchoclass.php"; 
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card w-100">
                <div class="card-body d-flex justify-content-center">
                    <h2>ĐƠN HÀNG CHỜ</h2>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="dongytaodonhangcho">

            <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                Tạo mới đơn hàng
            </button>

        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
           
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-dark mt-3 text-center table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Hàng đã đặt</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $tentaikhoan = $_SESSION['khachhang'];
        
                        $nguoidung = new khachhangclass();
                        $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                        $makhachhang = $thongtin->makhachhang;

                        $donhangcho = new donhangchoclass();
                        $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHang($makhachhang);

                        $stt = 1;

                        foreach ($thongtin as $tt) {
                        ?>
                            <tr class="ChiTietDonHangCho">
                                <td><?php echo $stt++; ?></td>
                                <td><?php 
                                    if($tt->trangthai=="dagui"){
                                        echo "<span class='text-warning'>Đã gửi</span>";
                                    }else  if($tt->trangthai=="chuagui"){
                                        echo "<span class='text-danger'>Chưa gửi</span>";
                                    }
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
                                <td><?php echo $tt->ngaytao;?></td>
                                <td>
                                <?php 
                                     $thongtinhangcuadonhangcho = $donhangcho->ChiTietMotDonHangDaGui($makhachhang, $tt->madonhangcho);
                                     foreach ($thongtinhangcuadonhangcho as $tth) {
                                        ?>
                                            <?php echo $tth->tenhanghoa .": ".  $tth->soluong . "<br>"?>
                                        <?php
                                    }
                                ?>
                                </td>
                                <td>
                                    <?php
                                        if($tt->trangthai=="chuagui"){
                                           ?>
                                                <form action="controller/donhangchocontroller.php?yc=xoadonhangchuagui&madonhangcho=<?php echo $tt->madonhangcho;?>" method="post">
                                                    <input type="submit" value="Xóa" class="btn btn-outline-danger">
                                                </form>
                                           <?php
                                        }else{
                                            ?>
                                                <div class="text-warning">Không thể thao tác</div> 
                                            <?php
                                        }
                                    ?>
                                <td/>
                            </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    require "modalkhachhang.php";
?>

<!-- Button trigger modal -->

