<div class="them-moi-khach">
    <a class="btn btn-primary mt-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Thêm mới
    </a>

    <div class="collapse" id="collapseExample">
        <div class="card mt-3 bg-brown" style="border-radius: 50px 50px;">
            <div class="card-header text-light text-center bg-browns" style=" border-radius: 50px 50px 0px 0px;">
                <strong>THÊM KHÁCH HÀNG</strong>
            </div>
            <div class="card-body">
                <form action="controller/khachhangcontroller.php?yc=them" method="post" class="w-100">   
                    <div class="form-group">
                        <label for="" class="text-light">Tên tài khoản: (<span class="need">Số điện thoại</span>) </label>
                        <input type="number" name="tentaikhoan" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="text-light">Mật khẩu: (<span class="need">*</span>)</label>
                        <input type="text" name="matkhau" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>

                    <div class="form-group">
                        <label for="" class="text-light">Địa chỉ: (<span class="need">*</span>)</label>
                        <input type="text" name="diachi" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Họ tên: (<span class="need">*</span>)</label>
                        <input type="text" name="hoten" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Trực thuộc: (<span class="need">*</span>)</label>
                        <input type="text" name="tructhuoc" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Cấp bậc: (<span class="need">*</span>)</label>
                        <select name="capbac" class="form-control rounded-pill">
                            <option value="si">Sĩ</option>
                            <option value="le">Lẻ</option>
                            <option value="chinhanh">Chi nhánh</option>
                            <option value="daili">Đại lí</option>
                            <option value="tongdaili">Tổng đại lí</option>
                            <option value="nhaphanphoi">Nhà phân phối</option>
                            <option value="nhaphanphoivang">Nhà phân phối vàng</option>
                            <option value="nhaphanphoikimcuong">Nhà phân phối kim cương</option>
                            <option value="giamdockinhdoanh">Giám đốc kinh doanh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>  <!-- END CARD THEM-->
</div>
