<?php
    if(isset($_SESSION['admin'])){
       ?>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                <h1 class="titlequanli">N'Store Thanh Nhi</h1>
            </div>

            <!-- QUAN LI KHACH -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                <a href="index.php?page=quanlikhachhang" class="w-100 text-decoration-none">
                    <div class="card  w-100">
                    <div class="d-flex justify-content-center">
                        <img src="public/images/quanlikhachhang.png" alt="" srcset="" width="auto" class="img-quanli">
                    </div>
                        <div class="card-body">
                            <h3 class="card-title text-center">QL Khách Hàng</h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI KHACH-->

            <!-- QUAN LI HANG HOA -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                <a href="index.php?page=quanlihanghoa" class="w-100 text-decoration-none">
                    <div class="card  w-100">
                    <div class="d-flex justify-content-center">
                        <img src="public/images/quanlihanghoa.png" alt="" srcset="" width="auto" class="img-quanli">
                    </div>
                
                        <div class="card-body">
                            <h3 class="card-title text-center">QL Hàng Hóa</h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI HANG HOA -->

            <!-- QUAN LI DON HANG -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center mt-3">
                <a href="index.php?page=quanlidonhang" class="w-100 text-decoration-none">
                    <div class="card w-100">
                    <div class="d-flex justify-content-center">
                        <img src="public/images/donhangcho.png" alt="" srcset="" width="auto" class="img-quanli">
                    </div>
                        <div class="card-body">
                            <h3 class="card-title text-center">QL Đơn Hàng</h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI DON HANG-->
        </div>  <!-- END ROW -->
       <?php
    }else if(isset($_SESSION['khachhang'])){
       
    }else{
        echo "Lỗi...! không thể lấy thông tin tài khoản";
    }
?>