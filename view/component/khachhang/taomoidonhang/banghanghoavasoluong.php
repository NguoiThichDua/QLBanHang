<!-- HIEN THI CAC MON HANG VA SO LUONG DUOC THEM VAO DON HANG CHO HIEN TAI -->
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
            # lay session cua khach hang => lay ten dang nhap (sodienthoai)
            $tentaikhoan = $_SESSION['khachhang'];

            # lay ma khach hang bang ten dang nhap (SESSION)
            $nguoidung = new khachhangclass();
            $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
            $makhachhang = $thongtin->makhachhang;

            # lay don hang cho hien tai cua khach hang dua vao makhach hang ben tren
            $donhang = new donhangchoclass();
            $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhachhang);
            $madonhangcho = $thongtin->MAX;

            # lay tat ca ten hang va so luong hang hoa cua don hang hien tai da duoc them vao
            $chitietdonhang = new chitiethanghoaclass();
            $thongtin = $chitietdonhang->LayHangHoaCuaDonHangDangTao($madonhangcho);

            $stt = 1;

            # in ra cac thong tin can thiet
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
                                <div class="col-md-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#thaydoisoluonghanghoa" onclick="ThayDoiSoLuongHang('<?php echo $tt->macthh?>', '<?php echo $tt->madonhangcho;?>', '<?php echo $tt->soluong?>')">
                                        Thay đổi số lượng
                                    </button>
                                </div>
                                <div class="col-md-6 d-flex justify-content-start">
                                    <form action="controller/donhangchocontroller.php?yc=xoahanghoatrongdonhangcho&madonhangcho=<?php echo $madonhangcho?>&macthh=<?php echo $tt->macthh?>" method="post">
                                        <input type="submit" class="btn btn-danger ml-3" value="Loại bỏ">
                                    </form>
                                </div>
                            </div>  <!-- END ROW-->
                        </td>
                    </tr>
                <?php
            }
        } catch (Exception $e) {
            echo $e;
        }
    ?>
    </tbody>
</table>    <!-- END TABLE -->
