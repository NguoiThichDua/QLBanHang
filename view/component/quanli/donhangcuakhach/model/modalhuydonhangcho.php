<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Xóa Đơn Hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Bạn muốn loại bỏ đơn hàng này ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <form action="controller/donhangchocontroller.php?yc=adminxoadonhangchuagui" method="post">
                <input type="text" name="madonhangcho" id="madonhangchoxoa" class="d-none" readonly>
                <input type="submit" value="Xóa" class="btn btn-danger">
            </form>
        </div>
        </div>
    </div>
</div>