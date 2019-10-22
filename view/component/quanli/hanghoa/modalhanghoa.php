<!-- Modal xóa hàng hóa -->
<div class="modal fade" id="XoaHangHoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Xóa hàng hóa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="controller/hanghoacontroller.php?yc=xoa" method="post">
               <div class="form-group">
                  <input type="text" name="mahanghoa" class="form-control rounded-pill" id="mahanghoaxoa" required readonly style="display:none"> 
               </div>
               <div class="form-group">
                  <label for="" class="text-dark">Bạn muốn xóa món hàng:</label>
                  <input type="text" name="tenhanghoa" class="form-control rounded-pill" id="tenhanghoaxoa" required readonly style="border:none;">
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

<!-- Modal Sửa hàng hóa -->
<div class="modal fade" id="SuaHangHoa" tabindex="-1" role="dialog" aria-labelledby="SuaHangHoaModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="SuaHangHoaModalLabel">Sửa hàng hóa</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
         <form action="controller/hanghoacontroller.php?yc=sua" method="post">
            <div class="form-group">
               <label for="" class="text-dark">Mã hàng hóa:</label>
               <input type="text" name="mahanghoa" class="form-control rounded-pill" id="mahanghoasua" required readonly title="Không thể thay đổi dữ liệu này"> 
            </div>
            <div class="form-group">
               <label for="" class="text-dark">Tên hàng hóa:</label>
               <input type="text" name="tenhanghoa" class="form-control rounded-pill" id="tenhanghoasua" required title="Không được để trống tên hàng">
            </div>
            <div class="form-group">
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                  <input type="submit" class="btn btn-success" value="Thay đổi">
               </div>
         </form>
         </div>
      </div>
   </div>
</div>