
<?php
    require "model/hanghoaclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body text-center">
                <h2>QUẢN LÍ HÀNG HÓA</h2>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card mt-3">
            <div class="card-body">
                <form action="controller/hanghoacontroller.php?yc=them" method="post" class="w-100">   
                    <div class="form-group">
                        <label for="" class="text-dark">Tên hàng hóa:</label>
                        <input type="text" name="tenhanghoa" class="form-control rounded-pill" required  title="Không được để trống tên hàng">
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="text-dark">Giá:</label>
                        <input type="number" name="gia" class="form-control rounded-pill" min="0" title="Giá phải lớn hơn hoặc bằng 0">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive">
            <table class="table table-dark mt-3">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Tên hàng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 1;

                        try {
                            $hanghoa = new hanghoaclass();
                            $thongtin = $hanghoa->LayTatCaHangHoa();

                            foreach ($thongtin as $tt) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $stt++; ?></th>
                                        <td><?php echo $tt->tenhanghoa; ?></td>
                                        <td><?php echo $tt->gia; ?></td>
                                        <td>
                                            <div class="btn btn-primary" data-toggle="modal" data-target="#SuaHangHoa" onclick="SuaHangHoa('<?php echo $tt->mahanghoa?>', '<?php echo $tt->tenhanghoa?>', '<?php echo $tt->gia?>')">Sửa</div>
                                            <div class="btn btn-danger" data-toggle="modal" data-target="#XoaHangHoa" onclick="XoaHangHoa('<?php echo $tt->mahanghoa?>', '<?php echo $tt->tenhanghoa?>')">Xóa</div>
                                        </td>
                                    </tr>
                                <?php
                            }
                        } catch (Exception $e) {
                            echo $e;
                        }
                       ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php 
    require "modalhanghoa.php";
?>


