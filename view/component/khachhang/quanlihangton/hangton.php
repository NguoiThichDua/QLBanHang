
<div class="card">
    <div class="card-header bg-dark text-light">
        Tất cả hàng tồn cập nhật
    </div>
    <div class="card-body">

<?php
    require "model/chitiethangtonclass.php";
    require "model/hangtonclass.php";

    if(isset($_SESSION['khachhang'])){
        $tenkhachhang = $_SESSION['khachhang'];

        # lay ma khach hang
        $khachhang = new khachhangclass(); 
        $makhachhang = $khachhang-> LayMotKhachHangBangTen($tentaikhoan);
        $makhach = $makhachhang->makhachhang;

        # lay tat ca cac don hang ton cua khach hang do
        $hangton = new hangtonclass();
        $thongtinhangton = $hangton->LayTatCahangton($makhach);
        
 ?>
    <!-- Lay ra cac du lieu can thiet -->
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Tên hàng & số lượng còn</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $stt = 1;
            foreach ($thongtinhangton as $tt) {
                ?>        
                        <tr>
                            <td><?php echo $stt++;?></td>
                            <td><?php echo $tt->ngaytao;?></td>
                            
                            <td>
                                <?php
                                    # lay chitiethang ton (tat ca mon hang cua hangton) bang mahangton va cua khach nao
                                    $thongtinchitiethangton = $hangton->LayTatCaHangTonBangMaKhachHang($makhach, $tt->mahangton);
                                    foreach ($thongtinchitiethangton as $ctht) {
                                        echo $ctht->tenhanghoa . " - Còn: " . $ctht->soluong . "<br>";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    $hangton = new hangtonclass();
                                    $mahangton = $hangton->LayMaxHangTon($makhach);
                                    $mahangtonmax = $mahangton->donhangtonmoinhat;
                                ?>
                                <!-- Huy don hang ton hien tai bang mahangton max -->
                                <form action="controller/hangtoncontroller.php?yc=huybocapnhathangton&mahangton=<?php echo $mahangtonmax?>" method="post">
                                    <button type="submit" class="btn btn-danger">Hủy cập nhật này</button>
                                </form>
                            </td>
                        </tr>
                <?php
                }
        ?>
        </tbody>
    </table>
    <?php
    }
?>
    </div>
</div>




