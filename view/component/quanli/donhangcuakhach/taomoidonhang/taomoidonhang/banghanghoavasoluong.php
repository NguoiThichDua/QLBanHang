<?php
    require "model/khachhangclass.php";
?>
<div class="card mt-3">
    <div class="card-body">
        <h4>Bước 2. Kiểm tra giỏ hàng</h4>
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
                    $khachhang = new khachhangclass();
                    $tentaikhoan = $_REQUEST['sodienthoai'];

                    $thongtin = $khachhang->LayMotkhachhangBangTenTaiKhoan($tentaikhoan);
                    $makhach = $thongtin->makhachhang;

                    # lay don hang cho hien tai cua khach hang dua vao makhach hang ben tren
                    $donhang = new donhangchoclass();
                    $thongtin = $donhang->LayMotDonHangChoDuaVaoKhachHang($makhach);
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
                                    <form action="controller/donhangchocontroller.php?yc=xoahanghoatrongdonhangcho&madonhangcho=<?php echo $madonhangcho?>&macthh=<?php echo $tt->macthh?>" method="post">
                                        <input type="text" class="form-control rounded-pill d-none" name="makhachtaodonhang" value="<?php echo $_REQUEST['sodienthoai']?>" id="makhachthemdonhang" placeholder="Số điện thoại" readonly>
                                        <input type="submit" class="btn btn-danger ml-3" value="Loại bỏ">
                                    </form>
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
    </div>
</div>