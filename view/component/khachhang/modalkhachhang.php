
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Xác nhận tạo đơn hàng mới
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <form action="controller/donhangchocontroller.php?yc=themdonhangcho" method="post">
                <input type="submit" value="Đồng ý" class="btn btn-success">
            </form>
            <!-- <button type="button" class="btn btn-primary themmoidonhangcho" data-dismiss="modal">Đồng ý</a> -->
        </div>
        </div>
    </div>
</div>