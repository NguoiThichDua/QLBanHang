<?php
    if(isset($_SESSION['admin'])){
       ?>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                <div class="position-absolute" style="z-index: 999; left: 10px">       
                    <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="controller/nguoidungcontroller.php?yc=dangxuat">Đăng Xuất</a>
                </div>
                <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
            </div>

            <div class="col col-sm col-md col-lg col-xl"></div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-3">
                <h4><strong class="chaomung">CHÀO MỪNG ADMIN ĐÃ ĐĂNG NHẬP !</strong></h4>    
            </div>

            <!-- QUAN LI DON HANG -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center mt-3">
                <a href="index.php?page=quanlidonhang" class="w-100 text-decoration-none">
                    <div class="card mb-3 border border-white card-index-quanli" style=" border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                        <div class="d-flex justify-content-center ">
                            <img src="public/images/default/QLDH.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="card-img-top">
                        </div>
                      
                        <div class="card-body">
                            <h3 class="card-title text-center text-dark title-qlad"><strong>QUẢN LÍ ĐƠN HÀNG</strong></h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI DON HANG-->

            <!-- QUAN LI KHACH -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 d-flex justify-content-center">
                <a href="index.php?page=quanlikhachhang" class="w-100 text-decoration-none">
                    <div class="card mb-3 border border-white card-index-quanli" style=" border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                        <div class="d-flex justify-content-center ">
                            <img src="public/images/default/QLKH.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="img-quanli card-img-top">
                        </div>
                      
                        <div class="card-body">
                            <h3 class="card-title text-center text-dark title-qlad"><strong>QUẢN LÍ KHÁCH HÀNG</strong></h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI KHACH-->

            <!-- QUAN LI HANG HOA -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 d-flex justify-content-center">
                <a href="index.php?page=quanlihanghoa" class="w-100 text-decoration-none">
                    <div class="card mb-3 border border-white card-index-quanli" style=" border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/default/QLHH.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="card-img-top">
                        </div>
                      
                        <div class="card-body">
                            <h3 class="card-title text-center text-dark title-qlad"><strong>QUẢN LÍ HÀNG HÓA</strong></h3>
                        </div>
                    </div>
                </a>
            </div>  <!-- END QUAN LI HANG HOA -->
        </div>  <!-- END ROW -->
       <?php
    }else if(isset($_SESSION['khachhang'])){
       
    }else{
        echo "Lỗi...! không thể lấy thông tin tài khoản";
    }
?>