<div class="card mb-3">
    <div class="card-header bg-dark text-light"> 
        Tất cả món hàng đã mua
    </div>

    <div class="card-body" >
        <?php
            if(isset($_SESSION['khachhang'])){

                $tentaikhoan = $_SESSION['khachhang'];

                # lay nhung san pham ma khach hang da tung mua
                $hangdamua = new donhangclass();
                $thongtinhangdamua = $hangdamua->TongSanPhamChoHangTon($tentaikhoan);
                ?>
                    <div class="table-responsive table-hover">
                        <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên hàng hóa</th>
                                <th scope="col">Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                $stt = 1;
                foreach ($thongtinhangdamua as $tthdm) {
                    if($thongtinhangdamua != NULL){
                    ?>
                            <tr>
                                <td><?php echo $stt++;?></th>
                                <td><?php echo $tthdm->tenhanghoa;?></td>
                                <td><?php echo $tthdm->soluong;?></td>
                            </tr>
                    <?php
                    }
                    else{
                        echo "Bạn chưa có đơn hàng được duyệt... không có thông tin để hiển thị...!";
                    }
                }
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <?php

            }else{
                echo "Lỗi..! Không nhận được dữ liệu từ khách hàng";
            }
        ?>
    </div>
</div>

<?php
    require "boloc.php";
?>