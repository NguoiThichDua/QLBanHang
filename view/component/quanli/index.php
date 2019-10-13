<?php
    if(isset($_SESSION['admin'])){
       ?>
       <div class="container">
         
        <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">
                    <h1 class="titlequanli">QUẢN LÍ BÁN HÀNG</h1>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                    <a href="index.php?page=taodonhang" class="w-100 text-decoration-none">
                        <div class="card">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/taodonhang.png" alt="" srcset="" width="auto" class="img-quanli">
                        </div>
                            <div class="card-body">
                                <h1 class="card-title text-center">TẠO ĐƠN HÀNG</h1>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                    <a href="index.php?page=quanlidonhang" class="w-100 text-decoration-none">
                        <div class="card  w-100">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/quanlidonhang.png" alt="" srcset="" width="auto" class="img-quanli">
                        </div>
                            <div class="card-body">
                                <h1 class="card-title text-center">QUẢN LÍ ĐƠN HÀNG</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                    <a href="index.php?page=quanlinhanvien" class="w-100 text-decoration-none">
                        <div class="card  w-100">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/quanlinhanvien.png" alt="" srcset="" width="auto" class="img-quanli">
                        </div>
                            <div class="card-body">
                                <h1 class="card-title text-center">QUẢN LÍ NHÂN VIÊN</h1>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3 d-flex justify-content-center">
                    <a href="index.php?page=quanlikhachhang" class="w-100 text-decoration-none">
                        <div class="card  w-100">
                        <div class="d-flex justify-content-center">
                            <img src="public/images/quanlikhachhang.png" alt="" srcset="" width="auto" class="img-quanli">
                        </div>
                    
                            <div class="card-body">
                                <h1 class="card-title text-center">QUẢN LÍ KHÁCH HÀNG</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
       <?php
    }else if(isset($_SESSION['khachhang'])){
       
    }
?>