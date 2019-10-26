<!-- THEM GHI CHU VA GUI DON HANG CHO ADMIN -->
<div class="card mt-3">
    <div class="card-body">
        <h4>Bước 3. Thêm ghi chú và gửi</h4><small>(khi đã chọn xong các món hàng)</small>
        <hr>
        <form action="controller/donhangchocontroller.php?yc=guichoadmin" method="post">

            <input type="text" class="form-control rounded-pill d-none" name="makhachtaodonhang" value="<?php echo $_REQUEST['sodienthoai']?>" id="makhachthemdonhang" placeholder="Số điện thoại" readonly>
            <div class="form-group">
                <textarea name="ghichu" id="" cols="" rows="3" class="form-control pb-2" placeholder="Bạn có thể bỏ trống ghi chú của đơn hàng này"></textarea>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <?php
                            if(isset($_REQUEST['kq'])){
                                if($_REQUEST['kq'] == "dathemhang" || $_REQUEST['kq'] == "datontaimonhang" || $_REQUEST['kq'] == "thaydoisoluongthanhcong"){
                                ?>
                                    <input type="submit" class="btn btn-success " value="Gửi đơn hàng">
                                <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                <div class="form-group">
                    <?php
                        # FORM HUY DON HANG CHO HIEN TAI
                        require "huydonhangcho.php"; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>