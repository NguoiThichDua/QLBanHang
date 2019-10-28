<!-- NAVBAR CHO NGUOI DUNG -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-0" id="navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="nav-link font-weight-bold" href="index.php?page=quanli">
            <img src="public/images/logo.png" alt="" srcset="" width="auto" height="50px" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- NAVBAR CONTENT -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-center">
                    <a class="nav-link font-weight-bold ml-3" href="index.php?page=quanli">Trang chủ</a>
                </li>
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle font-weight-bold text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lí
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-center" href="index.php?page=donhangcho">Quản lí đơn hàng</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="index.php?page=quanlihangton">Quản lí hàng tồn</a>
                    
                        
                    </div>
                </li>
            
            </ul>
            <ul class="navbar-nav">
                <?php
                    require "model/khachhangclass.php";

                    # kiem tra xem co session khachhang dang nhap hay khong de hien thi ten
                    if(isset($_SESSION['khachhang'])){
                        $tentaikhoan = $_SESSION['khachhang'];

                        $nguoidung = new khachhangclass();
                        $thongtin = $nguoidung->LayMotKhachHangBangTen($tentaikhoan);
                ?>
                    <li class="nav-item text-center float-right">
                        <div class="dropdown" style="cursor: pointer">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <strong><?php echo $thongtin->hoten;?></strong>
                            </span>
                            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-center" href="index.php?page=trangcanhan">Trang cá nhân</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center" href="controller/nguoidungcontroller.php?yc=dangxuat">Đăng xuất</a>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>  <!-- END NAVBAR CONTENT -->
    </div>
</nav>  <!-- END NAVBAR CHO NGUOI DUNG-->