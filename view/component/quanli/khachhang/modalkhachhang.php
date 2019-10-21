<!-- Modal xóa -->
<div class="modal fade" id="XoaKhachHang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Xóa khách hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="controller/khachhangcontroller.php?yc=xoa" method="post">
               <div class="form-group">
                  <input type="text" name="makhachhang" class="form-control rounded-pill" id="makhachhangxoa" required readonly style="display:none"> 
               </div>
               <div class="form-group">
                  <label for="" class="text-dark">Bạn muốn khách hàng:</label>
                  <input type="text" name="tenkhachhang" class="form-control rounded-pill" id="tenkhachhangxoa" required readonly style="border:none;">
               </div>
               <div class="form-group">
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                     <input type="submit" class="btn btn-danger" value="Tiến hành xóa">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Modal Sửa  -->
<div class="modal fade" id="SuaKhachHang" tabindex="-1" role="dialog" aria-labelledby="SuaHangHoaModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="SuaHangHoaModalLabel">Sửa thông tin</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
            <form action="controller/khachhangcontroller.php?yc=sua" method="post" class="w-100">   
                <div class="form-group">
                    <label for="" class="text-dark">Mã tài khoản: (<span class="need">*</span>) </label>
                    <input type="text" name="makhachhang" id="makhachhangsua" class="form-control rounded-pill" required readonly title="Không thể thay đổi giá trị này">
                </div> 
                <div class="form-group">
                    <label for="" class="text-dark">Tên tài khoản: (<span class="need">*</span>) </label>
                    <input type="number" name="tentaikhoan" id="tentaikhoansua" class="form-control rounded-pill" required title="Không được để rỗng trường này" readonly>
                </div> 
                
                <div class="form-group">
                    <label for="" class="text-dark">Mật khẩu: (<span class="need">*</span>)</label>
                    <input type="text" name="matkhau" id="matkhausua" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                </div>

                <div class="form-group">
                    <label for="" class="text-dark">Địa chỉ: (<span class="need">*</span>)</label>
                    <input type="text" name="diachi" id="diachisua" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                </div>
                <div class="form-group">
                    <label for="" class="text-dark">Số điện thoại: (<span class="need">*</span>)</label>
                    <input type="text" name="sodienthoai" id="sodienthoaisua" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                </div>
                <div class="form-group">
                    <label for="" class="text-dark">Họ tên: (<span class="need">*</span>)</label>
                    <input type="text" name="hoten" id="hotensua" class="form-control rounded-pill" required title="Không được để rỗng trường này">
                </div>
                <div class="form-group">
                  <label for="" class="text-dark">Trực thuộc: (<span class="need">*</span>)</label>
                  <input type="text" name="tructhuoc" id="tructhuocsua" class="form-control rounded-pill" required title="Không được để rỗng trường này">
               </div>
               <div class="form-group">
                  <label for="" class="text-dark">Cấp bậc: (<span class="need">*</span>)</label>
                  <select name="capbac" class="form-control rounded-pill" id="capbacsua">
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
                    <input type="submit" value="Thay đổi" class="btn btn-success">
                </div>
            </form>
         </div>
      </div>
   </div>
</div>