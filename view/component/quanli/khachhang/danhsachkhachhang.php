<div class="danh-sach-khach table-responsive-xl">
    <table class="table table-light mt-3">
        <thead class=" text-light bg-browns">
            <tr class="text-center " >
                <th scope="col">#</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Đã nghĩ</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody class="">
            <?php 
                $stt = 1;
                
                try {
                    $khachhang = new khachhangclass();
                    $thongtin = $khachhang->LayTatCaKhachHang();

                    foreach ($thongtin as $tt) {
                        if($tt->danghi == "chưa nghĩ"){
                        ?>
                            <tr class="text-center">
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
                                    <div class="btn btn-primary" data-toggle="modal" data-target="#SuaKhachHang" onclick="SuaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->tentaikhoan?>', '<?php echo $tt->matkhau?>', '<?php echo $tt->hoten?>', '<?php echo $tt->sodienthoai?>', '<?php echo $tt->diachi?>', '<?php echo $tt->tructhuoc;?>', '<?php echo $tt->capbac; ?>')">SỬA</div>
                                    <div class="btn btn-danger" data-toggle="modal" data-target="#XoaKhachHang" onclick="XoaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->hoten?>')">XÓA</div>
                                </td>
                            </tr>
                        <?php
                            }else{
                                ?>
                            <tr class="text-center" style="color: #BDBDBD">
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
                                <div class="btn btn-primary" data-toggle="modal" data-target="#SuaKhachHang" onclick="SuaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->tentaikhoan?>', '<?php echo $tt->matkhau?>', '<?php echo $tt->hoten?>', '<?php echo $tt->sodienthoai?>', '<?php echo $tt->diachi?>', '<?php echo $tt->tructhuoc;?>', '<?php echo $tt->capbac; ?>')">SỬA</div>
                                <div class="btn btn-danger" data-toggle="modal" data-target="#XoaKhachHang" onclick="XoaKhachHang('<?php echo $tt->makhachhang?>', '<?php echo $tt->hoten?>')">XÓA</div>
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
    </table>    <!-- END TABLE -->
</div>  <!-- END RESPONSIVE -->