<!-- MODAL -->
<div class="modal fade" id="capnhathangton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-browns text-light">
        <h5 class="modal-title" id="exampleModalLabel">THÔNG BÁO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-brown text-light">
        Tạo bản cập nhật hàng tồn ?
        <form action="controller/hangtoncontroller.php?yc=themdonhangton" method="post" class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-primary ml-3">OK</button>
        </form>
      </div>
    </div>
  </div>
</div>