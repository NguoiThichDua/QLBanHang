<div class="table-responsive">
    <table class="table table-dark text-center table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hàng đã đặt</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Công nợ</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            try {
                # lay ten tai khoan bang SESSION
                $tentaikhoan = $_SESSION['khachhang'];

                # lay ma khach hang bang ten khach hang
                $nguoidung = new khachhangclass();
                $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                $makhachhang = $thongtin->makhachhang;

                # requied nay dat tren dau moi hop li
                require "model/donhangchoclass.php";

                # lay tat ca cac don hang cua khach hang da duoc duyet va hien thi
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
                            <td class="text-light"><?php echo $tt->ngaytao;?></td>
                            <td>
                                <span class="text-warning"><?php echo $tt->thanhtien;?></span>
                            </td>
                            <td>
                                <span class="text-danger"><?php echo $tt->congno;?></span>
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
    </table>    <!-- END TABLE-->
</div>  <!-- END RESPONSIVE -->