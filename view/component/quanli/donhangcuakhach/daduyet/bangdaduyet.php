<div class="table-responsive" >
    <table class="table table-dark mt-3 text-center table-hover rounded-lg" id="loc">
        <thead>
            <tr>
                <th scope="col" colspan="10"><h4>Tất Cả Đơn Hàng Đã Duyệt</h4></th>
            </tr>
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
        <tbody>
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