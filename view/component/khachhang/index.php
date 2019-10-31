<div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <div class="position-absolute" style="z-index: 999; left: 10px">       
            <a class="btn btn-outline-brown btn-lg dangxuat rounded-pill" href="controller/nguoidungcontroller.php?yc=dangxuat">Đăng Xuất</a>
        </div>
        <img src="public/images/default/logo.png" class="logo" alt="" srcset="" width="auto" height="150px">
    </div>

    <div class="col col-sm col-md col-lg col-xl"></div>

    <?php
        require "model/khachhangclass.php";

        # kiem tra xem co session khachhang dang nhap hay khong de hien thi ten
        if(isset($_SESSION['khachhang'])){
            $tentaikhoan = $_SESSION['khachhang'];
    
            $nguoidung = new khachhangclass();
            $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
        }
    ?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
        <h4><strong class="chaomung">WELCOME, <?php echo $thongtin->hoten; ?></strong></h4>    
    </div>

    <!-- QLDH -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center mt-3">
        <a href="index.php?page=donhangcho" class="w-100 text-decoration-none">
            <div class="card mb-3 border border-white card-index-quanli" style="border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                <div class="d-flex justify-content-center ">
                    <img src="public/images/default/QLDH.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="card-img-top">
                </div>
                
                <div class="card-body">
                    <h3 class="card-title text-center text-dark title-qlad"><strong>QUẢN LÍ ĐƠN HÀNG</strong></h3>
                </div>
            </div>
        </a>
    </div> <!-- END QLDH-->

     <!-- HANG TON -->

     <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center mt-3">
        <a href="index.php?page=quanlihangton" class="w-100 text-decoration-none">
            <div class="card mb-3 border border-white card-index-quanli" style=" border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                <div class="d-flex justify-content-center ">
                    <img src="public/images/default/QLHT.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="card-img-top">
                </div>
                
                <div class="card-body">
                    <h3 class="card-title text-center text-dark title-qlad"><strong>QUẢN LÍ HÀNG TỒN</strong></h3>
                </div>
            </div>
        </a>
    </div> <!-- END HANG TON -->

     <!-- CA NHAN -->
     <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center mt-3">
        <a href="index.php?page=trangcanhan" class="w-100 text-decoration-none">
            <div class="card mb-3 border border-white card-index-quanli" style="border-radius: 50px 50px; box-shadow: 0 15px 25px rgba(0,0,0,.1);">
                <div class="d-flex justify-content-center ">
                    <img src="public/images/default/boy.png" style="height: 270px; padding:50px" alt="" srcset="" width="" class="card-img-top rounded-pill">
                </div>
                
                <div class="card-body">
                    <h3 class="card-title text-center text-dark title-qlad"><strong>TRANG CÁ NHÂN</strong></h3>
                </div>
            </div>
        </a>
    </div>  <!-- END CA NHAN -->
</div>  <!-- END ROW-->