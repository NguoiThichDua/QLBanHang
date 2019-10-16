<!-- Modal -->
<div class="modal fade" id="thaydoisoluonghanghoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thay đổi số lượng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="controller/donhangchocontroller.php?yc=thaydoisoluonghang" method="post">
                <div class="form-group">
                    <input type="text" name="macthh" id="macthhsua" class="form-control" style="display:none">
                    <input type="text" name="madonhangcho" id="madonhangchosua" class="form-control" style="display:none">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-5">
                            <input type="text" name="" id="soluongmacdinh" class="form-control rounded-pill" disabled>
                        </div>
                        <div class="col-2">
                            <span>=></span>
                        </div>
                        <div class="col-5">
                            <input type="number" name="soluong" id="soluongsua" class="form-control rounded-pill" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </form>
      </div>
      
    </div>
  </div>
</div>