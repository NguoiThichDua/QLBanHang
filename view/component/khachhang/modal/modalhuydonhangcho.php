<!-- Modal -->
<div class="modal fade" id="huydonhangcho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">THÔNG BÁO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn muốn hủy đơn hàng đang chờ này
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="controller/donhangchocontroller.php?yc=xoadonhangchuagui" method="post">
                    <input type="text" name="madonhangcho" id="madonhangchoxoa" class="d-none" readonly>    
                    <input type="submit" value="Đóng" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>