<!-- Modal xóa hàng hóa -->
<div class="modal fade" id="XoaHangHoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-browns text-light">
            <h5 class="modal-title" id="exampleModalCenterTitle">THÔNG BÁO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body bg-brown ">
            <form action="controller/hanghoacontroller.php?yc=xoa" method="post">
               <div class="form-group">
                  <input type="text" name="mahanghoa" class="form-control rounded-pill" id="mahanghoaxoa" required readonly style="display:none"> 
               </div>
               <div class="form-group">
                  <label for="" class="text-dark"><span class="text-danger">CẨN THẬN XÓA <br> - Các dữ liệu liên quan đến hàng hóa này có thể bị lỗi <br> - Hoặc dữ liệu trên các đơn hàng sẽ mất đi không thể không phục</span></label>
				  <label for="" class="text-light">Bạn vẫn muốn xóa món hàng ?</label>
				  <input type="text" name="tenhanghoa" class="form-control rounded-pill" id="tenhanghoaxoa" required readonly style="border:none;">
               </div>
               <div class="form-group">
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                     <input type="submit" class="btn btn-danger" value="TIẾN HÀNH XÓA" title="CẨN THẬN TRƯỚC KHI XÓA KHỎI HỆ THỐNG">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Modal Sửa hàng hóa -->
<div class="modal fade" id="SuaHangHoa" tabindex="-1" role="dialog" aria-labelledby="SuaHangHoaModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
      <div class="modal-header bg-browns text-light">
         <h5 class="modal-title" id="SuaHangHoaModalLabel">SỬA HÀNG HÓA</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body bg-brown">
         <form action="controller/hanghoacontroller.php?yc=sua" method="post">
            <div class="form-group">
               <label for="" class="text-light">Mã hàng hóa:</label>
               <input type="text" name="mahanghoa" class="form-control rounded-pill" id="mahanghoasua" required readonly title="Không thể thay đổi dữ liệu này"> 
               <label for="" class="text-light">Tên hàng hóa:</label>
               <input type="text" name="tenhanghoa" class="form-control rounded-pill" id="tenhanghoasua" required title="Không được để trống tên hàng">
            </div>
            <div class="form-group">
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary text-light" data-dismiss="modal">Đóng</button>
                  <input type="submit" class="btn btn-success" value="THAY ĐỔI">
               </div>
         </form>
         </div>
      </div>
   </div>
</div>