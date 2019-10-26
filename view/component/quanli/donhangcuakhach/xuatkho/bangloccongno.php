
        <thead>
            <tr>
                <th scope="col" colspan="5"><h4>Lọc Công Nợ</h4></th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th csope="col">Tên khách hàng</th>
                <th csope="col">Số điện thoại</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Tên hàng & số lượng còn</th>
            </tr>
        </thead>
        <tbody>

<?php
    require "../../../../../model/donhangchoclass.php";
    require "../../../../../model/khachhangclass.php";
    require "../../../../../model/donhangclass.php";
    require "../../../../../model/hangtonclass.php";

    # kiem tra cac thong tin lay qua co day du hay khong => donhang.js
    if(isset($_REQUEST['tenkhachhangtimcongno']) && isset($_REQUEST['sodienthoaikhachhangtimcongno']) && isset($_REQUEST['ngaybatdautimcongno']) && isset($_REQUEST['ngayketthuctimcongno'])){

        $tenkhach = $_REQUEST['tenkhachhangtimcongno'];
        $sodienthoai = $_REQUEST['sodienthoaikhachhangtimcongno'];
        $ngaybatdautim = $_REQUEST['ngaybatdautimcongno'];
        $ngayketthuctim = $_REQUEST['ngayketthuctimcongno'];

        $hangton = new hangtonclass();

        if($ngaybatdautim != "" && $ngaybatdautim != ""){
            $thongtin = $hangton->LayDonHangTonCuaKhachTheoNgayThang($tenkhach, $sodienthoai, $ngaybatdautim, $ngayketthuctim);
        }else{
            $thongtin = $hangton->LayTatCaTheoMaKhach($tenkhach, $sodienthoai);
        }
        
        try {
            

            $stt = 1;
            foreach ($thongtin as $tt) {
                ?>        
                    <tr>
                        <td><?php echo $stt++;?></td>
                        <td>
                            <?php 
                                # lay ten khach bang ma khach hang
                                $khachhang = new khachhangclass();
                                $thongtin = $khachhang->LayMotkhachhang($tt->makhachhang);
                                echo $tenkhach = $thongtin->hoten;
                            ?>
                        </td>
                        <td>
                            <?php  echo $thongtin->sodienthoai; ?>
                        </td>
                        <td><?php echo $tt->ngaydatao; ?></td>
                        
                        
                        <td>
                            <?php
                              # lay chitiethang ton (tat ca mon hang cua hangton) bang mahangton va cua khach nao
                              $thongtinchitiethangton = $hangton->LayTatCaHangTonBangMaKhachHang($tt->makhachhang, $tt->mahangton);
                              foreach ($thongtinchitiethangton as $ctht) {
                                  echo $ctht->tenhanghoa . " - Còn: " . $ctht->soluong . "<br>";
                              }
                            ?>
                        </td>
                    </tr>
                <?php
                }
    
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