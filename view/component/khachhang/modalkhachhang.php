<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Xác nhận tạo đơn hàng mới
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                <input type="submit" value="Đồng ý" class="btn btn-success">
            </form>
            <!-- <button type="button" class="btn btn-primary themmoidonhangcho" data-dismiss="modal">Đồng ý</a> -->
        </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ChiTietDonHangCho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--  -->
        <div class="table-responsive ">
            <table class="table table-dark mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên hàng</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 1;

                        $tentaikhoan = $_SESSION['khachhang'];
                        
                        $donhangcho = new donhangchoclass();
                        $nguoidung = new khachhangclass();

                        $thongtinkhachhang = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                        $makhachhang = $thongtinkhachhang->makhachhang;

                        $thongtin = $donhangcho->ChiTietMotDonHangDaGui($makhachhang, $madonhang);

                        foreach ($thongtin as $tt) {
                            ?>
                                <tr>
                                    <th><?php echo $stt++; ?></th>
                                    <td><?php echo $tt->tenhanghoa;?></td>
                                    <td><?php echo $tt->soluong;?></td>
                                </tr>
                            <?php
                        }
                    ?>
                   
                </tbody>
            </table>
        </div>
        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>