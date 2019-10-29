 <!-- NAVBAR CHO ADMIN -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light p-0" id="navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="nav-link font-weight-bold" href="index.php?page=quanli">
            <img src="public/images/default/logo.png" alt="" srcset="" width="auto" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- NAVBAR CONTENT -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-center">
                    <a class="nav-link font-weight-bold" href="index.php?page=quanli">Trang chủ </a>
                </li>
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lí
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=quanlidonhang">Quản lí đơn hàng</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=quanlikhachhang">Quản lí khách hàng</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=quanlihanghoa">Quản lí hàng hóa</a>
                    </div>
                </li>
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chức năng
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="controller/nguoidungcontroller.php?yc=dangxuat">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>  <!-- END NAVBAR CONTENT -->
    </div>
</nav>  <!-- END NAVBAR CHO ADMIN -->