<div class="row">
    <div class="col-md-12 mt-3 ">
        <?php
            if(isset($_GET['kq'])){
                $ketQua = $_GET['kq'];
                    # Nhận biến kết quả và kiểm tra để in ra thông báo
                switch ($ketQua) {
                    
                    case 'dasuakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã sửa thông tin khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daxoakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xoá khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemkhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dulieurong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="message">
                            <strong>Thất bại!</strong> Vui lòng điền đầy đủ thông tin...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'saimatkhau':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="message">
                            <strong>Thất bại!</strong> Sai tên tài khoản hoặc mật khẩu...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'tenhangtrong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="message">
                            <strong>Thất bại!</strong> Tên hàng không được để rỗng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemhang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'dasuahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thay đổi thông tin hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'daxoahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xóa hàng hóa...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;     
                    default:
                        # code...
                        break;
                    }
            }else{

            }
        ?>
    </div>
</div>




