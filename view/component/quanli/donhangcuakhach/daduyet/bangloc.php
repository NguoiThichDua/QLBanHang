
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
        <tbody>

<?php
    require "../../../../../model/donhangchoclass.php";
    require "../../../../../model/khachhangclass.php";
    require "../../../../../model/donhangclass.php";

    # kiem tra cac thong tin lay qua co day du hay khong => donhang.js
    if(isset($_REQUEST['tenkhach']) && isset($_REQUEST['sodienthoai']) && isset($_REQUEST['ngayketthuctim']) && isset($_REQUEST['ngaybatdautim'])){

        $tenkhach = $_REQUEST['tenkhach'];
        $sodienthoai = $_REQUEST['sodienthoai'];
        $ngaybatdautim = $_REQUEST['ngaybatdautim'];
        $ngayketthuctim = $_REQUEST['ngayketthuctim'];
        
        try {
                    
            $donhangcho = new donhangchoclass();
            $stt = 1;

            if($ngaybatdautim != "" && $ngayketthuctim != ""){
                # lay tat ca cac don hang cua khach - so dien thoai - ngay bat dau - ngay ket thuc
                $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHangDaDuyetTheoSoDienThoai($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim);
                # tinh cong no tat ca cac don hang cua khach - so dien thoai - ngay bat dau - ngay ket thuc
                $tongcongnocuakhach = $donhangcho->CongNoCuaKhachHangDaDuyetTheoNgayThang($tenkhach,$sodienthoai, $ngaybatdautim, $ngayketthuctim);
            
                $tongtungsanpham = $donhangcho->TongSanPhamTheoNgayThang($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim);
            }else{
                # lay tat ca cac don hang cua khach - so dien thoai
                $thongtin = $donhangcho->LayTatCaDonHangChoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai);
                # tinh cong no tat ca cac don hang cua khach - so dien thoai
                $tongcongnocuakhach = $donhangcho->CongNoCuaKhachHangDaDuyetTheoTen($tenkhach, $sodienthoai);
                #tinh tong cac san pham theo ten va so dien thoai
                $tongtungsanpham = $donhangcho->TongSanPhamTheoTen($tenkhach, $sodienthoai);
            }

            # cho nay duoc ajax (donhang.js)) goi len truyen vao id loctheodieukien cua bangdaduyet.php
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
                        <h3>Những Món Hàng Đã Đặt</h3>
                        <?php
                            foreach ($tongtungsanpham as $ttsp) {
                                ?>
                                    <ul>
                                        <li><?php  echo "<h5>".$ttsp->tenhanghoa .": <span class='text-warning'>". $ttsp->soluong . "<span></h5>";?></li>
                                    </ul>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="10">
                        <?php foreach ($tongcongnocuakhach as $cn) {
                            if($_REQUEST['tenkhach'] != ""){
                                echo "<h3>TỔNG CÔNG NỢ: <span class='text-info'>" . $cn->tongcongno . "</span> nghìn đồng</h3> ";
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

        </tbody>
