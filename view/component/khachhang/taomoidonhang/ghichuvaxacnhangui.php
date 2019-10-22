<!-- THEM GHI CHU VA GUI DON HANG CHO ADMIN -->
<div class="card mt-3">
    <div class="card-body">
        <h4><strong>2. Thêm ghi chú và gửi yêu cầu</strong><h5><small>(khi đã chọn xong các món hàng)</small></h5></h4>
        <hr>
        <form action="controller/donhangchocontroller.php?yc=guichoadmin" method="post">
            <div class="form-group">
                <textarea name="ghichu" id="" cols="" rows="3" class="form-control pb-2"></textarea>
            </div>
            <div class="form-group">
                <?php
                    if(isset($_REQUEST['kq'])){
                        if($_REQUEST['kq'] == "dathemhang" || $_REQUEST['kq'] == "datontaimonhang" || $_REQUEST['kq'] == "thaydoisoluongthanhcong"){
                        ?>
                            <input type="submit" class="btn btn-success " value="Xác nhận thêm đơn hàng chờ">
                        <?php
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</div>