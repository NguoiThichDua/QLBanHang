<?php 
    require "../../../../../model/chitiethanghoaclass.php";

    //$donhangcho = new donhangchoclass();

    if(isset($_REQUEST["madonhangcho"])){
        $madonhangcho = $_REQUEST["madonhangcho"];
        
        $thongtin = new chitiethanghoaclass();

        $thongtinsanphamdonhang = $thongtin->LayHangHoaCuaDonHangDangTao($madonhangcho);

        foreach ($thongtinsanphamdonhang as $tt) {
            echo "<strong> Giá trên một món: ".$tt->tenhanghoa."</strong> " . " <span class='text-danger'>(Số lượng: " . $tt->soluong . ")</span>" ?>
                <div class="form-group">
                    <input type="number" name="<?php echo $tt->mahanghoa;?>" placeholder="Giá trên mỗi món" class="form-control rounded-pill bg-secondary text-light" title="Không được để rổng" required>
                </div>
            <?php
        }
    }
?>