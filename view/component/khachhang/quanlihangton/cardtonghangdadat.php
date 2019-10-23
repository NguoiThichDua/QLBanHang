<div class="card mb-3">
    <div class="card-header bg-dark text-light">
        Tổng những món hàng bạn đã đặt
    </div>
    <div class="card-body">
        <?php
            if(isset($_SESSION['khachhang'])){

                $tentaikhoan = $_SESSION['khachhang'];

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
                        echo "Bạn chưa có đơn hàng được duyệt... không thể hiển thị thông tin...!";
                    }
                }
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <?php

            }else{
                echo "Không nhận được dữ liệu";
            }
            
        ?>
    </div>
</div>