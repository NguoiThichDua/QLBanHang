
<?php
  if(isset($_SESSION['admin'])){
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <img src="public/images/logo.png" alt="" srcset="" width="auto" height="50px">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold ml-3" href="index.php?page=quanli">Trang chủ </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản lí
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=quanlidonhang">Quản lí đơn hàng</a>
          <a class="dropdown-item" href="index.php?page=quanlikhachhang">Quản lí khách hàng</a>
          <a class="dropdown-item" href="index.php?page=quanlinhanvien">Quản lí nhân viên</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chức năng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=taodonhang">Tạo đơn hàng</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="controller/taikhoancontroller.php?yc=dangxuat">Đăng xuất</a>
        </div>
      </li>
  </div>
</nav>

<?php
  }else if(isset($_SESSION['khachhang'])){
    ?>
      <nav class="navbar navbar-expand-lg navbar-light">
  <img src="public/images/logo.png" alt="" srcset="" width="auto" height="50px">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold ml-3" href="index.php?page=quanli">Trang chủ</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản lí
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=themdonhangcho">Thêm đơn hàng chờ</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chức năng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="controller/taikhoancontroller.php?yc=dangxuat">Đăng xuất</a>
        </div>
      </li>
  </div>
</nav>
    <?php
  }
?>