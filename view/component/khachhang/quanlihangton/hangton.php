
<div class="card">
    <div class="card-header bg-browns text-light">
        Tất cả hàng tồn cập nhật
    </div>
    <div class="card-body bg-brown">

<?php
    require "model/chitiethangtonclass.php";
    require "model/hangtonclass.php";

    if(isset($_SESSION['khachhang'])){
        $tenkhachhang = $_SESSION['khachhang'];

        require "model/khachhangclass.php";
        # lay ma khach hang
        $khachhang = new khachhangclass(); 
        $makhachhang = $khachhang-> LayMotKhachHangBangTen($tentaikhoan);
        $makhach = $makhachhang->makhachhang;

        # lay tat ca cac don hang ton cua khach hang do
        $hangton = new hangtonclass();
        $thongtinhangton = $hangton->LayTatCahangton($makhach);
        
 ?>
    <!-- Lay ra cac du lieu can thiet -->
    <table class="table text-center table-light">
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
                                <!-- Huy don hang ton hien tai bang mahangton max -->
                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#huycapnhathangton" onclick="KhachXoaDonHangTon('<?php echo $tt->mahangton;?>')">
                                    Hủy cập nhật này
                                </button>
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


<?php
    require "view/component/khachhang/modal/modalxoacapnhathangton.php";
?>





