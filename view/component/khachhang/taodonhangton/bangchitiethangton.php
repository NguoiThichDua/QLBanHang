<?php
    require "model/chitiethangtonclass.php";
    require "model/hangtonclass.php";

    if(isset($_SESSION['khachhang'])){

        require "model/khachhangclass.php";
         # lay ma khach hang bang SESSION
        $tentaikhoan = $_SESSION['khachhang'];
        $khachhang = new khachhangclass();
        $khachhang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);
        $makhachhang = $khachhang->makhachhang;
    
        # lay ma hang ton moi nhat boi khach hang vua tao
        $hangton = new hangtonclass();
        $mahangton = $hangton->LayMaxHangTon($makhachhang);
        $mahangtonmax = $mahangton->donhangtonmoinhat;
    
        # khi co duoc ma hang ton hien tai (MAX) tien hanh lay cac chitiethang ton da them
        $hangton = new chitiethangtonclass();
        $hangtronghangton = $hangton->LayTatCaChiTietHangTonBoiMaHangTon($mahangtonmax);
    }else{
        echo "Không thể lấy thông tin khách hàng bởi SESSION";
    }
?>
<div class="card">
    <!-- TABLE - HIEN THI CAC CHI TIET HANG TON CO TRONG DON HANG TON HIEN TAI (MAX) -->
    <!-- <div class="card-header">

    </div> -->
    <div class="card-body bg-brown">
        <table class="table text-center table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên hàng hóa</th>
                    <th scope="col">Số lượng còn</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stt=1;
                    foreach ($hangtronghangton as $ht) {
                        ?>
                            <tr>
                                <td><?php echo $stt++;?></td>
                                <td><?php echo $ht->tenhanghoa ;?></td>
                                <td><?php echo $ht->soluong ; ?></td>
                                <td>
                                <!-- Sua so luong cua mon hang bang mactht va mahangton -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suasoluongctht" onclick="BindinSoLuong('<?php echo $ht->soluong?>', <?php echo $ht->mactht?>)">
                                    Sửa
                                </button>

                                <!-- Huy bo mon hang hien tai trong hang ton -->
                                <form action="controller/hangtoncontroller.php?yc=huymonhangkhoihangton&mahangton=<?php echo $mahangtonmax;?>&mactht=<?php echo $ht->mactht;?>" method="post">  
                                    <button type="submit" class="btn btn-danger">Loại bỏ</button>
                                </form>
                                    
                                </td>
                            </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>
        <div class="row">
            <!-- Luc nay da them het roi - co cai nut nay de ve trang quan li thoi -->
            <div class="col">
                <a href="index.php?page=quanlihangton" class="btn btn-success">Xác nhận thay đổi</a>
            </div>
            <!-- Xoa hangton va tat ca mon hang (chitiethangton) cua bang hangton (mahangton) -->
            <div class="col d-flex justify-content-end">
                <form action="controller/hangtoncontroller.php?yc=huybocapnhathangton&mahangton=<?php echo $mahangtonmax?>" method="post">
                    <button type="submit" class="btn btn-danger">Hủy tất cả cập nhật này</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require "modalsuasoluong.php";
?>