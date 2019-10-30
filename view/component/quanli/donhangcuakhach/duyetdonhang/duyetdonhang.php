
<?php
    require "model/donhangchoclass.php";
    require "model/khachhangclass.php";
?>

<div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive ">
            <table class="table table-light mt-3 text-center table-hover">
                <thead>
                    <tr>
                        <th colspan="7"><strong>NHỮNG ĐƠN HÀNG CHỜ DUYỆT</strong></th>
                    </tr>
                    <tr class="bg-browns text-light">
                        <th scope="col">#</th>
                        <th scope="col">Mã đơn hàng chờ</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Hàng đã đặt</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                <?php 
                    try {
                        $donhangcho = new donhangchoclass();
                        $thongtin = $donhangcho->LayTatCaDonHangCho();

                        $stt = 1;

                        foreach ($thongtin as $tt) {
                            if($tt->trangthai == "dagui"){
                        ?>
                            
                                <tr class="ChiTietDonHangCho duyetdonhangcho">
                                    <td><?php echo $stt++; ?></td>
                                    <td><?php echo $tt->madonhangcho; ?></td>
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
                                    <td class="text-success"><?php echo $tt->ngaytao;?></td>
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
                                    <td>
                                        <?php
                                            if($tt->trangthai=="chuagui"){
                                            ?>
                                                <form action="controller/donhangchocontroller.php?yc=xoadonhangchuagui&madonhangcho=<?php echo $tt->madonhangcho;?>" method="post">
                                                    <input type="submit" value="Xóa" class="btn btn-danger">
                                                </form>
                                            <?php
                                            }else{
                                                ?>
                                                    <button type="button" class="btn btn-primary" onclick="LayMaDonHangCho('<?php echo $tt->madonhangcho; ?>')" data-toggle="modal" data-target="#duyetdonhang">
                                                        Duyệt
                                                    </button>
                                                   
                                                    <button type="button" class="btn btn-danger" onclick="LayMaDonHangCho('<?php echo $tt->madonhangcho; ?>')" data-toggle="modal" data-target="#exampleModal">
                                                        Không duyệt
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

<?php
    require "view/component/quanli/donhangcuakhach/model/modalduyetdonhang.php";
    require "view/component/quanli/donhangcuakhach/model/modalhuydonhangcho.php";
?>

