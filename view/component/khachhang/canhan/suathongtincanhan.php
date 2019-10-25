<!-- 
    # vi day la trang duoc goi len boi ajax nen can required file khachhangclass vao
    # lay duoc thong tin $tentaikhoan bang SESSION 
    # tu $tentaikhoan hien thi ra cac thong tin can sua
 -->

<?php
    session_start();

    $str1 = "../../model/khachhangclass.php";
    $str2 = "../../../model/khachhangclass.php";
    $str3 = "../../../../model/khachhangclass.php";

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;

    $khachhang = new khachhangclass();

    if(isset($_SESSION['khachhang'])){
        # lay ten khach hang bang SESSION
        $tentaikhoan = $_SESSION['khachhang'];
        # lay duoc nhung thong tin cua khach
        $thongtinkhachang = $khachhang->LayMotKhachHangBangTen($tentaikhoan);
        ?>
            <div class="card mb-3">
                <div class="card-header">
                    Thông tin của bạn:
                </div>
                <div class="card-body">
                    <form action="controller/khachhangcontroller.php?yc=khachhangsua" method="post">
                        <div class="form-group">
                            <input type="text" name="makhachhang" value="<?php echo $thongtinkhachang->makhachhang?>" class="form-control rounded-pill d-none" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Họ & Tên:</label>
                            <input type="text" name="hoten" value="<?php echo $thongtinkhachang->hoten?>" class="form-control rounded-pill" required>
                        </div>

                         <div class="form-group">
                         <label for="">Trực thuộc: </label>
                            <input type="text" name="tructhuoc" value="<?php echo $thongtinkhachang->tructhuoc?>" required class="form-control rounded-pill">
                        </div>

                        <div class="form-group">
                            <label for=""> Địa chỉ:</label>
                            <input type="text" name="diachi" value="<?php echo $thongtinkhachang->diachi?>" required class="form-control rounded-pill">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success suathongtin" value="Xác nhận">
                            <a href="index.php?page=trangcanhan" class="btn btn-danger suathongtin">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        <?php

    }else{
        ?>
            <div class="alert alert-danger" role="alert">
                <strong>Lỗi..!</strong> không tìm thấy thông tin..!
            </div>
        <?php
    }
?>

