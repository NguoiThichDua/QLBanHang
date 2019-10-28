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
            try {
                # lay ten tai khoan khach hang (so dien thoai) bang session
                $tentaikhoan = $_SESSION['khachhang'];

                # tu ten tai khoan lay duoc thong tin makhachhang cua tai khoan do
                $nguoidung = new khachhangclass();
                $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                $makhachhang = $thongtin->makhachhang;

                # tu ma khach hang lay duoc cac don hang cho da gui cua tai khoan do
                $donhangcho = new donhangchoclass();
                $thongtindonhang = $donhangcho->LayTatCaDonHangChoCuaKhachHangDaGui($makhachhang);

                $stt = 1;

                foreach ($thongtindonhang as $tt) {
                    if($tt->trangthai == "daduyet"){
                        
                    }else{
                        ?>
                            <tr class="ChiTietDonHangCho">
                                <td><?php echo $stt++; ?></td>
                                <td><?php 
                                        if($tt->trangthai=="dagui"){
                                            echo "<span class='text-warning'>Đã gửi</span>";
                                        }else if($tt->trangthai=="chuagui"){
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
                                <td class="text-success"><?php echo $tt->ngaytao;?></td>
                                <td>
                                    <?php
                                        # lay ten hang hoa va so luong cua 1 don hang cho tu ma khach hang 
                                        $thongtinhangcuadonhangcho = $donhangcho->ChiTietMotDonHangDaGui($makhachhang, $tt->madonhangcho);
                                        foreach ($thongtinhangcuadonhangcho as $tth) {
                                            if(isset($tth->tenhanghoa)){
                                                echo $tth->tenhanghoa .": <span class='text-info'>".  $tth->soluong . "</span><br>";
                                            }else{
                                                echo "Món hàng đã ngừng cung cấp - hoặc bị xóa bởi admin<br>";
                                            }
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($tt->trangthai=="chuagui" || $tt->trangthai == "dagui"){
                                        ?>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#huydonhangcho" onclick="KhachHuyDonHangCho('<?php echo $tt->madonhangcho?>')">
                                                Hủy
                                            </button>
                                        <?php
                                        }else{
                                            ?>
                                                <div class="text-danger">Chỉ xem</div> 
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
    </table>    <!-- END TABLE -->
</div>  <!-- END RESPONSIVE -->


<?php
    require "view/component/khachhang/modal/modalhuydonhangcho.php";
?>

