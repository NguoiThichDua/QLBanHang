<?php 
    require "model/donhangclass.php";
?>

<!-- Them cac mon hang vao chi tiet hang ton voi ma la mahangton -->
<form action="controller/chitiethangtoncontroller.php?yc=themchitiethangton" method="post">
    <div class="row">
        <div class="col-md-12">
            <h4><strong>1. Cập nhật hàng hóa và số lượng</strong></h4>
            <hr>
            <div class="form-group">
                <select class="form-control rounded-pill" name="tenhang">
                    <?php
                        if(isset($_SESSION['khachhang'])){
                            $tentaikhoan = $_SESSION['khachhang'];

                            # lay tat ca san pham ma khach hang da mua => tien hanh cap nhat
                            $hangdamua = new donhangclass();

                            # lay nhung san pham ma khach da tung mua (chua mua ko hien thi)
                            $thongtinhangdamua = $hangdamua->TongSanPhamChoHangTon($tentaikhoan);

                            foreach ($thongtinhangdamua as $tthdm) {
                    ?>
                                <option value="<?php echo $tthdm->tenhanghoa?>"><?php echo $tthdm->tenhanghoa;?></option>
                    <?php 
                            }
                        }else{
                            echo "Lỗi. Không nhận được thông tin tài khoản";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <!-- them so luong cua mon hang vua chon -->
                <input type="number" name="soluong" min="0" class="form-control rounded-pill" placeholder="Số lượng" required title="Số lượng phải lớn hơn 0">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button class="btn btn-primary">Cập nhật món này</button>
            </div>
        </div>
    </div>
</form> <!-- END FORM -->