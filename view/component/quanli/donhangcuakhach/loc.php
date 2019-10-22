<?php
    require "../../../../model/donhangchoclass.php";
    require "../../../../model/khachhangclass.php";
    require "../../../../model/donhangclass.php";

    if(isset($_REQUEST['tenkhach']) && isset($_REQUEST['sodienthoai']) && isset($_REQUEST['ngayketthuctim']) && isset($_REQUEST['ngaybatdautim'])){

        $tenkhach = $_REQUEST['tenkhach'];
        $sodienthoai = $_REQUEST['sodienthoai'];
        $ngaybatdautim = $_REQUEST['ngaybatdautim'];
        $ngayketthuctim = $_REQUEST['ngayketthuctim'];
        
        try {
                    
            $donhangcho = new donhangchoclass();

            $stt = 1;

            if($ngaybatdautim != "" && $ngayketthuctim != ""){
                $thongtin = $donhangcho-> LayTatCaDonHangChoCuaKhachHangDaDuyetTheoSoDienThoai($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim);
                $tongcongnocuakhach = $donhangcho->CongNoCuaKhachHangDaDuyetTheoNgayThang($tenkhach,$sodienthoai, $ngaybatdautim, $ngayketthuctim);
            }else{
                $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai);
                $tongcongnocuakhach = $donhangcho->CongNoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai);
            }
            

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

            ?>
                 <tr>
                        <td colspan="10">
                            <?php foreach ($tongcongnocuakhach as $cn) {
                                if($_REQUEST['tenkhach'] != ""){
                                    echo "TỔNG CÔNG NỢ: " . $cn->tongcongno;
                                }
                                
                            }; ?>
                        </td>
                    </tr>
            <?php
        } catch (Exception $e ) {
            echo $e;
        }

    }else{
       ?>
         <tr>
            <td colspan="9">
                Thông tin nhận được bị gián đoạn
            </td>
        </tr>
       <?php
    }
?>
