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
            <div class="table-responsive ">
                <table class="table table-dark mt-3 text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
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
                            <tr>
                                <th><?php echo $stt++; ?></th>
                                <td><?php echo $tt->ngaytao;?></td>
                                <td><?php 
                                    if($tt->trangthai=="dagui"){
                                        echo "<span class='text-primary'>Đã gửi</span>";
                                    }
                                    ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ChiTietDonHangCho" onclick="ChiTietDonHangCho('<?php echo $tt->madonhangcho;?>')">
                                        Chi tiết
                                    </button>
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
</div>

<?php
    require "modalkhachhang.php";
?>

<!-- Button trigger modal -->


