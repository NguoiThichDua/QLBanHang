
<?php
    require "model/khachhangclass.php";
?>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body text-center">
                <h2>QUẢN LÍ KHÁCH HÀNG</h2>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

    <a class="btn btn-primary mt-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Thêm mới
    </a>

    <div class="collapse" id="collapseExample">
        <div class="card mt-3">
                <div class="card-body">
                    <form action="controller/khachhangcontroller.php?yc=them" method="post" class="w-100">   
                        <div class="form-group">
                            <label for="" class="text-dark">Tên tài khoản: (<span class="need">*</span>) </label>
                            <input type="text" name="tentaikhoan" class="form-control" required>
                        </div> 
                        
                        <div class="form-group">
                            <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                            <input type="text" name="matkhau" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                            <input type="text" name="diachi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-dark">Số điện thoại: (<span class="need">*</span>)</label>
                            <input type="text" name="sodienthoai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                            <input type="text" name="hoten" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Thêm" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive ">
            <table class="table table-dark mt-3">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <?php 
                    $stt = 1;

                    $khachhang = new khachhangclass();
                    $thongtin = $khachhang->LayTatCaKhachHang();

                    foreach ($thongtin as $tt) {
                ?>
                <tbody>
                    <tr class="text-center">
                        <th><?php echo $stt++; ?></th>
                        <td><?php echo $tt->tentaikhoan; ?></td>
                        <td><?php echo $tt->matkhau; ?></td>
                        <td><?php echo $tt->hoten; ?></td>
                        <td><?php echo $tt->sodienthoai; ?></td>
                        <td><?php echo $tt->diachi; ?></td>
                        <td><?php echo $tt->ngaytao; ?></td>
                        <td>
                            <div class="btn btn-primary" data-toggle="modal" data-target="#SuaKhachHang" onclick="SuaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->tentaikhoan?>', '<?php echo $tt->matkhau?>', '<?php echo $tt->hoten?>', '<?php echo $tt->sodienthoai?>', '<?php echo $tt->diachi?>')">Sửa</div>
                            <div class="btn btn-danger" data-toggle="modal" data-target="#XoaKhachHang" onclick="XoaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->hoten?>')">Xóa</div>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php 
    require "modalkhachhang.php";
?>




