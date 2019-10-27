<div class="row">
    <div class="col-md-12 mt-3 ">
        <?php
            if(isset($_GET['kq'])){
                $ketQua = $_GET['kq'];
                    # Nhận biến kết quả và kiểm tra để in ra thông báo
                switch ($ketQua) {
                    case 'khonghople':
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> thông tin không hợp lệ..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'sodienthoaikhonghople':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> số điện thoại không hợp lệ..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    
                    case 'saimatkhaucu':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> sai mật khẩu cũ..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'thaydoithanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> đã thay đổi thông tin..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'tentaikhoanngan':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> số điện thoại không hợp lệ.!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dangkithanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> đăng kí tài khoản thành công..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break; 

                    case 'matkhauyeu':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> mật khẩu phải từ 6 kí tự..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                           
                    case 'tentaikhoantontai':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> tên tài khoản đã được sử dụng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;   
                    case 'tentaikhoankhongtontai':
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                                <strong>Thất bại!</strong> tên tài khoản không tồn tại..!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php
                            break;   
                    case 'sodienthoaitontai':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> số điện thoại này đã được sử dụng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;   
                    case 'matkhaukhongkhop':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> mật khẩu bạn nhập không giống nhau..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'thongtinrong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> vui lòng điền đầy đủ tất cả thông tin..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'dulieurong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> dữ liệu rỗng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;   
                    case 'giaam':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> giá không được âm..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dangnhapthanhcong':

                    if(isset($_REQUEST['hoten'])){
                        $hoten = $_REQUEST['hoten'];
                    }
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            Chào mừng bạn đã trở lại <strong><?php echo $hoten;?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break; 
                    case 'thaydoisoluongthanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> thay đổi số lượng thành công..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daloaibohangkhoidonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> đã loại món hàng khỏi đơn hàng..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'datontaimonhang':
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> sản phẩm đã có trong giỏ hàng, vui lòng chỉnh sửa số lượng tại giỏ hàng
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daxoadonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xóa đơn hàng chờ...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daguidonhangcho':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã gửi đơn hàng chờ...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'khoitaodonhangchothanhcong':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Khởi tạo đơn hàng thành công...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'khonglayduocthontinkhachhang':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> Không lấy được thông tin khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dasuakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã sửa thông tin khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'daxoakhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã xoá khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemkhachhang':
                    ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm khách hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dulieurong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> Vui lòng điền đầy đủ thông tin...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'saimatkhau':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> Sai tên tài khoản hoặc mật khẩu...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'tenhangtrong':
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thất bại!</strong> Tên hàng không được để rỗng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;
                    case 'dathemhang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thêm hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'dasuahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
                            <strong>Thành công!</strong> Đã thay đổi thông tin hàng...!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php
                        break;  
                    case 'daxoahang':
                        ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-pill mt-3" role="alert" id="message">
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




