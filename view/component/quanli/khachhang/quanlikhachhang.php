
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
                            <label for="" class="text-dark">Tên tài khoản: (<span class="need">Số điện thoại</span>) </label>
                            <input type="number" name="tentaikhoan" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        </div> 
                        
                        <div class="form-group">
                            <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                            <input type="text" name="matkhau" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        </div>

                        <div class="form-group">
                            <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                            <input type="text" name="diachi" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                            <input type="text" name="hoten" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-dark">Trực thuộc: (<span class="need">*</span>)</label>
                            <input type="text" name="tructhuoc" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-dark">Cấp bậc: (<span class="need">*</span>)</label>
                            <select name="capbac" class="form-control rounded-pill">
                                <option value="si">Sĩ</option>
                                <option value="le">Lẻ</option>
                                <option value="chinhanh">Chi nhánh</option>
                                <option value="daili">Đại lí</option>
                                <option value="tongdaili">Tổng đại lí</option>
                                <option value="nhaphanphoi">Nhà phân phối</option>
                                <option value="nhaphanphoivang">Nhà phân phối vàng</option>
                                <option value="nhaphanphoikimcuong">Nhà phân phối kim cương</option>
                                <option value="giamdockinhdoanh">Giám đốc kinh doanh</option>
                            </select>
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
                        <th scope="col">Họ tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Đã nghĩ</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 1;
                        
                        try {
                            $khachhang = new khachhangclass();
                            $thongtin = $khachhang->LayTatCaKhachHang();

                            foreach ($thongtin as $tt) {
                                if($tt->danghi == "chưa nghĩ"){
                               ?>
                                    <tr class="text-center bg-dark">
                                        <th><?php echo $stt++; ?></th>
                                        <td><?php echo $tt->tentaikhoan; ?></td>
                                        <td><?php echo $tt->hoten; ?></td>
                                        <td><?php echo $tt->diachi; ?></td>
                                        <td><?php echo $tt->ngaytao; ?></td>
                                        <td>
                                            <?php 
                                                if($tt->danghi == "chưa nghĩ"){?>
                                                    <form action="controller/khachhangcontroller.php?yc=nghiban&makhachang=<?php echo $tt->makhachhang;?>" method="post">
                                                       <input type="submit" value="chưa nghĩ" class="btn btn-success">
                                                    </form>
                                                  
                                                <?php 
                                                }        
                                            ?>
                                           
                                        </td>
                                        <td>
                                            <div class="btn btn-primary" data-toggle="modal" data-target="#SuaKhachHang" onclick="SuaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->tentaikhoan?>', '<?php echo $tt->matkhau?>', '<?php echo $tt->hoten?>', '<?php echo $tt->sodienthoai?>', '<?php echo $tt->diachi?>', '<?php echo $tt->tructhuoc;?>', '<?php echo $tt->capbac; ?>')">Sửa</div>
                                            <div class="btn btn-warning" data-toggle="modal" data-target="#XoaKhachHang" onclick="XoaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->hoten?>')">Xóa</div>
                                        </td>
                                    </tr>
                                <?php
                                 }else{
                                     ?>
                                    <tr class="text-center bg-dark" style="color: #6E6E6E">
                                    <th><?php echo $stt++; ?></th>
                                    <td><?php echo $tt->tentaikhoan; ?></td>
                                    <td><?php echo $tt->hoten; ?></td>
                                    <td><?php echo $tt->diachi; ?></td>
                                    <td><?php echo $tt->ngaytao; ?></td>
                                    <td>
                                        <?php 
                                            if($tt->danghi == "đã nghĩ"){?>
                                               <form action="controller/khachhangcontroller.php?yc=conban&makhachang=<?php echo $tt->makhachhang;?>" method="post">
                                                    <input type="submit" value="đã nghĩ" class="btn btn-danger">
                                                </form>
                                            <?php 
                                            }        
                                        ?>
                                       
                                    </td>
                                    <td>
                                        <div class="btn btn-primary" data-toggle="modal" data-target="#SuaKhachHang" onclick="SuaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->tentaikhoan?>', '<?php echo $tt->matkhau?>', '<?php echo $tt->hoten?>', '<?php echo $tt->sodienthoai?>', '<?php echo $tt->diachi?>', '<?php echo $tt->tructhuoc;?>', '<?php echo $tt->capbac; ?>')">Sửa</div>
                                        <div class="btn btn-warning" data-toggle="modal" data-target="#XoaKhachHang" onclick="XoaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->hoten?>')">Xóa</div>
                                    </td>
                                </tr>
                                <?php
                                 }
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
    require "modalkhachhang.php";
?>




