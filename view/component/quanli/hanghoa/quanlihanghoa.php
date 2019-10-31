
<?php
    require "model/hanghoaclass.php";
?>
    
<div class="row">
    
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="position-absolute" style="z-index: 999; left: 10px">       
            <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="index.php">Trang Chủ</a>
        </div>
        <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
        <h4><strong class="chaomung">QUẢN LÍ HÀNG HÓA</strong></h4>    
    </div>

    <!-- CARD THEM HANG HOA -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card card-them-hang-hoa" style="border-radius: 50px 50px;">
            <div class="card-header text-light text-center bg-browns" style=" border-radius: 50px 50px 0px 0px;">
                <strong>THÊM HÀNG HÓA</strong>
            </div>
            <div class="card-body bg-brown" style=" border-radius: 0px 0px 50px 50px;">
                <form action="controller/hanghoacontroller.php?yc=them" method="post" class="w-100">   
                    <div class="form-group text-light">
                        <label for="" class="">Tên hàng hóa:</label>
                        <input type="text" name="tenhanghoa" class="form-control rounded-pill" required  title="Không được để trống tên hàng">
                    </div> 
                    <div class="form-group">
                        <input type="submit" value="THÊM" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

    </div>  <!-- END CARD THEM HANG HOA-->

    <!-- TABLE HIEN THI TAT CA HANG -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class=" table-quan-li-hang-hoa">
            <!-- TABLE -->
            <table class="table table-light mt-3">
                <thead class="bg-browns">
                    <tr class="text-center text-light border border-white">
                        <th scope="col">#</th>
                        <th scope="col">TÊN HÀNG</th>
                        <!-- <th scope="col">Giá</th> -->
                        <th scope="col">CHỨC NĂNG</th>
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
                                        <!-- <td><?php echo $tt->gia; ?></td> -->
                                        <td>
                                            <div class="btn btn-primary" data-toggle="modal" data-target="#SuaHangHoa" onclick="SuaHangHoa('<?php echo $tt->mahanghoa?>', '<?php echo $tt->tenhanghoa?>')">SỬA</div>
                                            <div class="btn btn-danger" data-toggle="modal" data-target="#XoaHangHoa" onclick="XoaHangHoa('<?php echo $tt->mahanghoa?>', '<?php echo $tt->tenhanghoa?>')">XÓA</div>
                                        </td>
                                    </tr>
                                <?php
                            }
                        } catch (Exception $e) {
                            echo $e;
                        }
                       ?>
                </tbody>
            </table>    <!-- END TABLE -->
        </div>
    </div>
</div>  <!-- END ROW -->

<?php 
    require "view/component/quanli/model/modalhanghoa.php";
?>


