<div class="card mt-3">
    <div class="card-header bg-browns text-light ">
        <h4><strong>Bước 1. Thêm hàng hóa và số lượng</strong></h4>
    </div>
    <div class="card-body">
        <!-- FORM -->
        <form action="controller/donhangchocontroller.php?yc=themhanghoachodonhangcho" method="post">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  
                    <div class="form-group">
                        <select class="form-control rounded-pill" name="mahang">
                        <?php 
                            try {
                                # lay tat ca hang hoa co san dua vao select box
                                # hanghoaclass da duoc require tai taodonhangcho.php
                                $hanghoa = new hanghoaclass();
                                $thongtin = $hanghoa->LayTatCaHangHoa();

                                foreach ($thongtin as $tt) {
                                    ?>
                                        <option value="<?php echo $tt->mahanghoa;?>"><?php echo $tt->tenhanghoa; ?></option>
                                    <?php
                                }
                            } catch (\Throwable $th) {
                                echo $th;
                            }
                        ?>
                        </select>   <!-- END SELECT -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-group">
                        <!-- them so luong cua mon hang vua chon -->
                        <input type="number" name="soluong" min="1" class="form-control rounded-pill" placeholder="Số lượng" required title="Số lượng phải lớn hơn 0">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-group">
                        <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                        
                        <small>(Cần thêm một món hàng để gửi yêu cầu)</small>
                    </div>
                </div>
            </div>
        </form> <!-- END FORM -->
    </div>  <!-- END CARD BODY-->
</div>  <!-- END CARD-->