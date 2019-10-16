<div class="row">
    <div class="col-md-12 mt-3 ">
        <?php
            if(isset($_GET['kq'])){
                $ketQua = $_GET['kq'];
                    # Nhận biến kết quả và kiểm tra để in ra thông báo
                switch ($ketQua) {
                    case 'dulieurong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> dữ liệu rỗng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;   
                    case 'giaam':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> giá không được âm..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dangnhapthanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> đăng nhập thành công..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break; 
                    case 'thaydoisoluongthanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> thay đổi số lượng thành công..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daloaibohangkhoidonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> đã loại món hàng khỏi đơn hàng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'datontaimonhang':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> món hàng đã có trong danh sách...! <strong>Bạn có thể thay đổi thông tin bên dưới</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daxoadonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xóa đơn hàng chờ...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daguidonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã gửi đơn hàng chờ...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'khoitaodonhangchothanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Khởi tạo thành công...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'khonglayduocthontinkhachhang':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> Không lấy được thông tin khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dasuakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã sửa thông tin khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daxoakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xoá khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemkhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dulieurong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> Vui lòng điền đầy đủ thông tin...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'saimatkhau':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> Sai tên tài khoản hoặc mật khẩu...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'tenhangtrong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thất bại!</strong> Tên hàng không được để rỗng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemhang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'dasuahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thay đổi thông tin hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'daxoahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert" id="message">
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




