<!-- Modal -->
<div class="modal fade" id="huycapnhathangton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">THÔNG BÁO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn muốn xóa cập nhật này ? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <form action="controller/hangtoncontroller.php?yc=huybocapnhathangton" method="post">
                    <input type="text" name="mahangton" id="mahangtonxoa" readonly class="form-control d-none">
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
                
            </div>
        </div>
    </div>
</div>