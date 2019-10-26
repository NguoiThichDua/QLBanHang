<?php 
    require "../../../../../model/chitiethanghoaclass.php";

    //$donhangcho = new donhangchoclass();

    if(isset($_REQUEST["madonhangcho"])){
        $madonhangcho = $_REQUEST["madonhangcho"];
        
        $thongtin = new chitiethanghoaclass();

        $thongtinsanphamdonhang = $thongtin->LayHangHoaCuaDonHangDangTao($madonhangcho);

        foreach ($thongtinsanphamdonhang as $tt) {
            echo "<strong>".$tt->tenhanghoa."</strong> " . " <span class='text-danger'>(Số lượng: " . $tt->soluong . ")</span>" ?>
                <div class="form-group">
                    <input type="number" name="<?php echo $tt->mahanghoa;?>" placeholder="Giá" class="form-control rounded-pill bg-secondary text-light" required>
                </div>
            <?php
        }
    }
?>